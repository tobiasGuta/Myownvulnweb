from flask import Flask, render_template, request, redirect, session, send_from_directory
import sqlite3
import os

app = Flask(__name__)
app.secret_key = 'supersecretkey'

DATABASE = 'app/db/ctf_lab.db'
UPLOAD_FOLDER = 'app/static/uploads'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

# 🔧 Auto-create the DB and table if not found
if not os.path.exists(DATABASE):
    conn = sqlite3.connect(DATABASE)
    with open('app/db/schema.sql') as f:
        conn.executescript(f.read())
    conn.close()

def get_db():
    conn = sqlite3.connect(DATABASE)
    conn.row_factory = sqlite3.Row
    return conn

@app.route('/')
def index():
    return redirect('/login')

@app.route('/login', methods=['GET', 'POST'])
def login():
    error = None
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        conn = get_db()
        # 🚨 Deliberately vulnerable to SQLi
        query = f"SELECT * FROM users WHERE username = '{username}' AND password = '{password}'"
        try:
            cur = conn.execute(query)
            user = cur.fetchone()
        except Exception as e:
            return f"<pre>SQL Error: {e}</pre>"
        if user:
            session['username'] = user['username']
            session['is_admin'] = user['is_admin']
            return redirect('/profile')
        else:
            error = 'Invalid credentials'
    return render_template('login.html', error=error)

@app.route('/profile')
def profile():
    if 'username' not in session:
        return redirect('/login')
    return render_template('profile.html', username=session['username'])

@app.route('/admin')
def admin():
    if session.get('is_admin'):
        return render_template('admin.html')
    return "Access Denied", 403

@app.route('/flag')
def flag():
    if session.get('is_admin'):
        return send_from_directory('flags', 'flag.txt')
    return "Unauthorized", 401

@app.route('/upload', methods=['GET', 'POST'])
def upload_file():
    msg = ""
    if request.method == 'POST':
        file = request.files['file']
        if file:
            filename = file.filename
            save_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
            file.save(save_path)
            msg = f"File uploaded successfully: <a href='/static/uploads/{filename}'>{filename}</a>"
    return render_template('upload.html', msg=msg)
    
@app.route('/view')
def view_file():
    file = request.args.get('file', '')
    try:
        with open(file, 'r') as f:
            content = f.read()
        return f"<pre>{content}</pre>"
    except Exception as e:
        return f"<pre>Error: {e}</pre>"

