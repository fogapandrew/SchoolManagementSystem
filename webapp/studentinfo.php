<?php
require_once('./others/Data.php');

// Load database credentials from the config file
$config = require './others/config.php';

// Create an instance of the Data class with database credentials from the config file
$data = new Data($config);

$data->closeConnection();
?>
