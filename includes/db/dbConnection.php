<?php


$server = 'localhost';
$username = 'dev';
$password = 'Dev1234$';
$dbName = 'nguyen_portfolio';

$dbLink = new mysqli($server, $username, $password, $dbName);

if ($dbLink->connect_errno) {
    printf("Unable to connect to the database: %s", $dbLink->connect_error);
    exit();
}

if (!$dbLink) {
    die("Connection failed: " . $dbLink->error());
}
