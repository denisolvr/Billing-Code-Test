<?php
/**
 * User: denisolvr
 * Date: 28/08/15
 */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

/*
 * data DB
 */
$db_name = "DBNAME";
$db_user = "USER";
$db_pass = "PASS";
$db_host = "HOST";


/*
 * DB Connection
 */
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
}
catch (PDOexception $e) {
    echo "Error is: " . $e->getmessage();
}

// Able the model
include 'models/Bill.php';

// Create object
$invoiceList = new Bill($pdo);

// Show view
include 'views/json.php';

