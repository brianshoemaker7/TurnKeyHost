<?php

exec('sudo chown -R user1:www-data /home/user1/public_html/')

exec('sudo find /home/user1/public_html/ -type d -exec chmod 0755 {} \; -or -type f -exec chmod 0644 {} \;')

