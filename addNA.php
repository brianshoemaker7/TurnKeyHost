<?php

$user = $_POST['user'];
$pass = $_POST['password'];
$domain = $_POST['domain'];



exec('sudo chown -R user:www-data /home/user/public_html/');

exec('sudo find /home/user/public_html/ -type d -exec chmod 0755 {} \; -or -type f -exec chmod 0644 {} \;');

