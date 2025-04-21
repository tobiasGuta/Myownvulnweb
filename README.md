
# Broken Auth, SQLi, and File Upload - CTF Lab

A deliberately vulnerable Flask-based web app designed for CTF-style hacking practice.

## Features

- SQL Injection on login
- Broken access control to admin panel
- Insecure file upload
- Flag hidden behind admin-only access

## Run Locally

```bash
docker build -t ctf-lab .
docker run -p 5000:5000 ctf-lab
```

## Flag

Find the flag by exploiting the login system and accessing the admin panel.
