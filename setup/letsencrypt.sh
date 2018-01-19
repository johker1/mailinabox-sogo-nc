#! /bin/bash

source /etc/mailinabox.conf # get global vars
source setup/functions.sh # load our functions

sudo certbot --authenticator standalone --installer nginx \
  -d $PRIMARY_HOSTNAME --pre-hook "systemctl stop nginx" --post-hook "systemctl start nginx" \
  --no-redirect

rm -f $STORAGE_ROOT/ssl/ssl_private_key.pem
rm -f $STORAGE_ROOT/ssl/ssl_certificate.pem

ln -s /etc/letsencrypt/live/$PRIMARY_HOSTNAME/privkey.pem $STORAGE_ROOT/ssl/ssl_private_key.pem
ln -s /etc/letsencrypt/live/$PRIMARY_HOSTNAME/fullchain.pem $STORAGE_ROOT/ssl/ssl_certificate.pem

