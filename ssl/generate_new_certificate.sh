#!/bin/bash
cd ./ssl_key
rm *.key

cd ../ssl_certs
rm *.crt

cd ../ssl_request
rm *.csr

cd ../ca
rm *.key
rm *.crt

openssl genrsa -out ca.key 2048

openssl req -key ca.key -new -x509 -out ca.crt \
    -subj "/C=pl/ST=pomorskie/L=gdynia/O=PG/OU=PG/CN=pg.edu.pl/emailAddress=admin@pg.edu.pl"

openssl genrsa -out ../ssl_key/server.key 2048

openssl req -new -key ../ssl_key/server.key -out ../ssl_request/server.csr \
    -subj "/C=pl/ST=pomorskie/L=gdynia/O=PG/OU=ebiz/CN=localhost/emailAddress=admin@prestashop.com"

openssl x509 -req -in ../ssl_request/server.csr -CA ca.crt -CAkey ca.key -CAcreateserial -out ../ssl_certs/server.crt -days 365

#openssl x509 -req -in ../ssl_request/server.csr -signkey ../ssl/server.key -out ../ssl_certs/server.crt -days 365