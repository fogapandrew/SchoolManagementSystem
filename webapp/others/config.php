<?php
return [
    'database' => [
        'host' => '__DB_HOST__',
        'username' => '__DB_USERNAME__',
        'password' => '__DB_PASSWORD__',
    ],
];
?>

USGAE
<?php
require_once('Data.php');

// Load database credentials from the config file
$config = require 'config.php';

// Create an instance of the Data class with database credentials from the config file
$data = new Data($config);

// Replace 'myDB' with the desired name for your database
$data->createDatabase('myDB');

$data->closeConnection();
?>
