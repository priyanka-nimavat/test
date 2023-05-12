<?php


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', '');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'atest');


date_default_timezone_set("Asia/Kolkata");

define('EMAIL', 'nimavat.priyanka94@gmail.com');

DEFINE('WEBSITE_URL', 'http://www.atest.com');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);

if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}


?>



