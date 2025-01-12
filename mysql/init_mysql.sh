#!/bin/bash

MYSQL_HOST="admin-mysql_default"
MYSQL_PORT="3306"
MYSQL_USER="root"
MYSQL_PASSWORD="student"
MYSQL_DATABASE="BE_193165"

SQL_DUMP_FILE="../db_init/ps_db.sql"

echo "Tworze db"
mysql -h"$MYSQL_HOST" -P"$MYSQL_PORT" -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"

echo "Seeduje db"
mysql -h"$MYSQL_HOST" -P"$MYSQL_PORT" -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" < "$SQL_DUMP_FILE"

echo "Usuwam foldery"
if [ -d "install" ]; then
    rm -rf install
fi

if [ -d "config" ]; then
    rm -rf config
fi

echo "Uruchamianie zakonczona"

echo "Server Started"
exec apache2-foreground