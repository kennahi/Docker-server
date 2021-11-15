#!/bin/bash

service nginx start
status=$?
if [ $status -ne 0 ]; then
	echo "Failed to start nginx: $status"
	exit $status
fi

service mysql start
status=$?
if [ $status -ne 0 ]; then
	echo "Failed to start mysql: $status"
	exit $status
fi

service php7.3-fpm start
status=$?
if [ $status -ne 0 ]; then
	echo "Failed to start php7.3-fpm: $status"
	exit $status
fi

while sleep 1; do
	pgrep nginx > /dev/null
	NGINX_STATUS=$? 
	pgrep mysql > /dev/null
	MYSQL_STATUS=$?
	pgrep php > /dev/null
	PHP_STATUS=$?
	if [ $NGINX_STATUS  -ne 0 -o $MYSQL_STATUS -ne 0 -o $PHP_STATUS -ne 0 ]; then
		echo "One of the processes has already exited."
		exit 1
	fi
done
