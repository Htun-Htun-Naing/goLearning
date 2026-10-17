#!/bin/bash

# Enter html directory
# sudo yum install -y httpd
# sed -i 's#AllowOverride None#AllowOverride All#' /etc/httpd/conf/httpd.conf
# # mkdir -p /var/www/html/public

# sed -i 's#DocumentRoot "/var/www/html"#DocumentRoot "/var/www/html/public"#' /etc/httpd/conf/httpd.conf
# sed -e 's/DirectoryIndex.*/DirectoryIndex index.html index.php/' -i /etc/httpd/conf/httpd.conf

# # Get Composer, and install to /usr/local/bin
# if [ ! -f "/usr/local/bin/composer" ]; then
#     php81 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#     php81 composer-setup.php --install-dir=/usr/bin --filename=composer
#     php81 -r "unlink('composer-setup.php');"
# else
#     /usr/local/bin/composer self-update --stable --no-ansi --no-interaction
# fi

# sudo service httpd start
# chkconfig httpd on


# sudo yum install git -y
# yum install wget -y

#sudo yum install php80-php-{imap,pecl-memcache,cli,pecl-apcu,fpm,mysqlnd,devel,gd,mbstring,curl,xml,pear,bcmath,json,opcache,ldap} -y

