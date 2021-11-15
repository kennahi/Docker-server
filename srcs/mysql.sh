service mysql start
mysql < /var/www/html/phpmyadmin/sql/create_tables.sql
mysql -e "GRANT SELECT, INSERT, UPDATE, DELETE ON phpmyadmin.* TO 'ken'@'localhost' IDENTIFIED BY 'ken';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'kennahi'@'localhost' IDENTIFIED BY 'kennahi' WITH GRANT OPTION;"

mysql -e "CREATE DATABASE wordpress;"
mysql -e "GRANT ALL ON wordpress.* TO 'kennahi'@'localhost' IDENTIFIED BY 'kennahi';"
