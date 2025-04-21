
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    password TEXT NOT NULL,
    is_admin INTEGER DEFAULT 0
);

INSERT INTO users (username, password, is_admin) VALUES
('admin', 'adminpass', 1),
('user', 'userpass', 0);
