FROM php:8.2-apache

# Install Python
RUN apt-get update && apt-get install -y wget unzip python3-pip chromium chromium-driver python3-selenium

# Enable mod_rewrite
RUN a2enmod rewrite

# Setup upload dir
RUN mkdir -p /var/www/html/uploads && chown -R www-data:www-data /var/www/html/uploads

# Copy all lab files
COPY app/static/uploads/ /var/www/html/uploads/
COPY app/flags/rce_flag.txt /var/www/html/uploads/
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html/uploads
COPY app/sqli/ /var/www/html/sqli/
COPY sqli.php /var/www/html/
COPY upload.php /var/www/html/
COPY index.html /var/www/html/
COPY posts/ /var/www/html/posts/
COPY book.php /var/www/html/
COPY posts.php /var/www/html/
COPY ping.php /var/www/html/
COPY comment.php /var/www/html/
COPY comments.php /var/www/html/
COPY flag.php /var/www/html/
COPY admin-bot.php /var/www/html/


# 🧠 Copy the admin bot
COPY bot.py /bot.py

# Expose port
EXPOSE 80

# 🧠 Start the bot in the background and run Apache in the foreground
CMD python3 /bot.py & apache2-foreground
