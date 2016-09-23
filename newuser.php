<?php

echo '<pre>'.print_r(json_decode(file_get_contents("php://input")),1).'</pre>';

$name->name; $password->password; $domain->domain;

exec('sudo adduser '.$name.' -m -d /var/www/html/'.$name.'/public_html/' );

exec($name.'.:.'.$password.' | chpasswd');

exec('sudo chown -R '.$name.':www-data /var/www/html/'.$name.'/public_html/');

exec('sudo find /var/www/html/'.$name.'/public_html/ -type d -exec chmod 0755 {} \; -or -type f -exec chmod 0644 {} \;');