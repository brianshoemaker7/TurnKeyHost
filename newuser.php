<?php

echo '<pre>'.print_r(json_decode(file_get_contents("php://input")),1).'</pre>';

print_r($_POST);

echo "this works";

