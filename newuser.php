<?php

//Create a variable for the results
$result = file_get_contents("php://input");

// Decode the results into another variable
$json = json_decode($result, true);

// Assign usable variables for json results
$name = $json[name]; $password = $json[password]; $domain = $json[domain];


exec("sudo useradd $name");

exec("sudo mkdir /home/$name");

exec("sudo sh -c 'echo $name:$password | chpasswd' ");

exec("sudo usermod -s /bin/bash $name");

exec("sudo mkdir /home/$name/$domain.com");

exec("sudo mkdir /var/log/apache2/$domain/");

exec("sudo touch /var/log/apache2/$domain/error.log");

exec("sudo touch /var/log/apache2/$domain/access.log");

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

$txt = sprintf ($txt, $name, "public_html", $domain, $domain, $domain);

fwrite($myfile, $txt);

echo $txt;

exec("sudo a2ensite $domain");

exec("sudo service apache2 restart");

echo "Everything worked";