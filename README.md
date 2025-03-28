# Vulnerable Web Applications for Security Testing
This repository contains a series of vulnerable web applications designed to help cybersecurity enthusiasts and pen-testers practice their skills in identifying and exploiting common vulnerabilities. The vulnerabilities demonstrated in these applications include Local File Inclusion (LFI), Cross-Site Scripting (XSS), and more.

These applications are intentionally insecure and are designed for educational purposes only. They should never be deployed in production environments.

# Overview
This repository demonstrates various web vulnerabilities, which are common targets for web application attacks. These applications allow users to explore and practice exploiting these vulnerabilities in a controlled environment. The goal is to better understand the techniques used in penetration testing and to learn how to secure your applications.

Each application in this repository is isolated and covers different vulnerabilities, such as:

Local File Inclusion (LFI)
Cross-Site Scripting (XSS)


# Getting Started
Prerequisites
To run these applications, you will need the following:

- Apache Web Server (for PHP apps)
- PHP (for PHP applications)
- Wireshark (for capturing traffic, in the case of Man-in-the-Middle attacks)
- Optional: Docker for running the apps in a containerized environment

Setup Instructions

```bash
sudo apt install apache2
```

```bash
sudo apt install php libapache2-mod-php
```

# Test Apache and PHP
Create a Test PHP File (Optional): You can create a simple info.php file to check if PHP is working correctly:

```bash
echo "<?php phpinfo(); ?>" | sudo tee /var/www/html/info.php
```

```bash
http://localhost/info.php
```

1. Clone this repository:
```bash
git clone https://github.com/tobiasGuta/Myownvulnweb.git
```

```bash
cd Myownvulnweb
```

 ```bash
sudo cp * /var/www/html/
```

 ```bash
sudo chown -R $USER:$USER /var/www/html/
```



