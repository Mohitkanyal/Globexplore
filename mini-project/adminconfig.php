<?php 
// DB credentials.
$DB_HOST = getenv("AD_SERVER");
$DB_USER = getenv("AD_USER");
$DB_PASS = getenv("AD_PASS");
$DB_NAME = getenv("AD_NAME");
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
