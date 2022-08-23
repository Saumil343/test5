FROM amazonlinux
RUN yum install httpd php-5.4.16 php-mysqlnd -y
RUN systemctl enable httpd
COPY . /var/www/html
CMD ["/usr/sbin/httpd","-D","FOREGROUND"]
EXPOSE 80