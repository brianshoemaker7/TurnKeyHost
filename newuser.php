<?php

//Create a variable for the results
$result = file_get_contents("php://input");

// Decode the results into another variable
$json = json_decode($result, true);

// Assign usable variables for json results
$name = $json[name]; $password = $json[password]; $domain = $json[domain];

// echo '<pre>'.print_r(json_decode(file_get_contents("php://input")),1).'</pre>';

exec('sudo useradd -d /www/html/'.$name.'/public_html/ -p '.$password.' '.$name'');

// exec('sudo adduser '.$name.' -m -d /var/www/html/'.$name.'/public_html/' );

// exec($name.'.:.'.$password.' | chpasswd');

// exec('sudo chown -R '.$name.':www-data /var/www/html/'.$name.'/public_html/');

// exec('sudo find /var/www/html/'.$name.'/public_html/ -type d -exec chmod 0755 {} \; -or -type f -exec chmod 0644 {} \;');

// echo "Everything worked";