<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'demoxkpl.mysql.database.azure.com');
define('DB_USERNAME', 'azureuser');
define('DB_PASSWORD', 'Bet$0l@12345');
define('DB_NAME', 'appdb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
