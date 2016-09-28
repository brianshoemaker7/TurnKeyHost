<?php

//Create a variable for the results
$result = file_get_contents("php://input");

// Decode the results into another variable
$json = json_decode($result, true);

// Assign usable variables for json results
$name = $json[name]; $password = $json[password]; $domain = $json[domain];

// Create the user
exec("sudo useradd $name");

//Create the user's home directory
exec("sudo mkdir /home/$name");

//Create the user's password
exec("sudo sh -c 'echo $name:$password | chpasswd' ");

//Give the user access to FTP
exec("sudo usermod -s /bin/bash $name");

//Create an HTML directory for hosting
exec("sudo mkdir /home/$name/public_html");

exec("sudo chown -R $name:$name /home/$name/public_html");

//Create directory for apache
exec("sudo mkdir /var/log/apache2/$domain/");

//Create directory for error logs
exec("sudo touch /var/log/apache2/$domain/error.log");

//Create directory for access logs
exec("sudo touch /var/log/apache2/$domain/access.log");

//Begin Creating vhost file
$myfile = fopen("/etc/apache2/sites-enabled/$domain", "w");

$txt = <<<EOT
# Ensure that Apache listens on port 80
Listen 80
<VirtualHost *:80>

DocumentRoot /home/%s/%s

ServerName %s

<Directory />

Options FollowSymLinks

AllowOverride All

</Directory>

ErrorLog /var/log/apache2/%s/error.log

LogLevel warn

CustomLog /var/log/apache2/%s/access.log combined

</VirtualHost>

EOT;

//Create vhost config file info
$txt = sprintf ($txt, $name, "public_html", $domain, $domain, $domain);

//Save the vhost file
fwrite($myfile, $txt);
