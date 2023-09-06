docker run -dit --name mysite-relievestress-php81 \
-p 443:443 \
-p 80:80 \
-v /var/www/sites/MySite:/var/www/MySite \
fedora36-php81:latest