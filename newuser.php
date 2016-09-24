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



// exec('sudo chown -R '.$name.':www-data /var/www/html/'.$name.'/public_html/');

// exec('sudo find /var/www/html/'.$name.'/public_html/ -type d -exec chmod 0755 {} \; -or -type f -exec chmod 0644 {} \;');

echo "Everything worked";