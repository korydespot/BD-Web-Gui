<?php

$host = "localhost";
$dbname = "cvat";
$user = "cvat";
$password = "c3m4p2s";


$db_connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");

$result = pg_query($db_connection, "SELECT * FROM trailer");

//echo "BACK?";


?>