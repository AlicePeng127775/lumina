<?php

define('_HOST_NAME', 'localhost');
define('_DATABASE_NAME', 'u111243174_lumina_userlog');
define('_DATABASE_USER_NAME', 'u111243174_lumina');
define('_DATABASE_PASSWORD', 'YuAn1207');

$connection = new mysqli(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);

if ($connection->connect_errno) {
    die("ERROR : -> " . $connection->connect_error);
}

// echo "Connected successfully";

?>