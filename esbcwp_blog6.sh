#!/bin/bash

sudo rm -r /var/www/html/blog6/
sudo git clone https://github.com/eric010101/blog6 /var/www/html/blog6/
sudo cp /var/www/html/blog6/esbcwp_blog6.sql esbcwp_blog6.sql
sudo mysql -u root -psweetekhappy -e "create database esbcwp_blog6; GRANT ALL PRIVILEGES ON esbcwp_blog6.* TO esbcwp_blog6_admin@localhost IDENTIFIED BY 'esbcwp_blog6_happy'"
sudo mysql -u root -psweetekhappy esbcwp_blog6 < esbcwp_blog6.sql
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='奇林健康平台' WHERE option_name='blogname'"
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='全球首創區塊鏈健康生活平台' WHERE option_name='blogdescription'"
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='pengyauwang@hotmail.com' WHERE option_name='admin_email'"
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='http://$SSH_IP$/blog6' WHERE option_name='siteurl'"
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='http://$SSH_IP$/blog6' WHERE option_name='home'"
sudo mysql -u root -psweetekhappy -e "use esbcwp_blog6; UPDATE wp_options SET option_value='http://$SSH_IP$/blog6/wp-content/uploads' WHERE option_name='upload_path'"
sudo systemctl restart apache2