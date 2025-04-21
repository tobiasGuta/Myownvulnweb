# Broken Auth, SQLi, and File Upload, Lfi - CTF Lab

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

# Vulnerable Web Applications for Security Testing
This repository contains a series of vulnerable web applications designed to help cybersecurity enthusiasts and pen-testers practice their skills in identifying and exploiting common vulnerabilities. The vulnerabilities demonstrated in these applications include Local File Inclusion (LFI), Cross-Site Scripting (XSS), and more.

These applications are intentionally insecure and are designed for educational purposes only. They should never be deployed in production environments.

# Overview
This repository demonstrates various web vulnerabilities, which are common targets for web application attacks. These applications allow users to explore and practice exploiting these vulnerabilities in a controlled environment. The goal is to better understand the techniques used in penetration testing and to learn how to secure your applications.

Each application in this repository is isolated and covers different vulnerabilities, such as:

Local File Inclusion (LFI)
Cross-Site Scripting (XSS)


