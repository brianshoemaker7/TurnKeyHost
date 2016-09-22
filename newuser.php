<?php

echo '<pre>'.print_r(json_decode(file_get_contents("php://input")),1).'</pre>';

echo "this works";