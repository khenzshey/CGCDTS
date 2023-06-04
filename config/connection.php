<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cgcdts');
define('DB_CHARSET', 'utf8mb4');

// define('DB_HOST', 'sql101.epizy.com');
// define('DB_USER', 'epiz_33724816');
// define('DB_PASS', 'zxRD4DpNF8uIwd');
// define('DB_NAME', 'epiz_33724816_raffle_db');
// define('DB_CHARSET', 'utf8mb4');


include_once '../includes/autoloader.inc.php';


$db = new Connection();
$conn = $db->conn();

$office = new Offices($conn);
$admins = new Admin($conn);
$documents = new Documents($conn);
$document = new Add_Document($conn);
$employee = new Employee($conn);
$accounts = new Accounts($conn);

//include_once '../includes/session.php';
