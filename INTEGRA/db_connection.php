<?php
$database = 'localhost';
$database_user = 'root';
$database_password = '';
$database_name = 'stock_integra';

$con = mysqli_connect($database, $database_user, $database_password, $database_name);

if (mysqli_connect_error()) {
    exit('Failed to connect to the database: ' . mysqli_connect_error());
}
?> 
