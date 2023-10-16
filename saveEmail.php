<?php
header("Access-Control-Allow-Origin: *");

ini_set('display_errors', 1);
error_reporting(E_ALL);

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

$fp = fopen("./attendence.txt", "a"); 
if ($fp === false) {
    die("Failed to open the file for writing.");
}

date_default_timezone_set('US/Eastern');
$writeTxt = date('M d Y H:i:s') . ", ";
$writeTxt .= $_POST['email'] . "\n";

if (fwrite($fp, $writeTxt) === false) {
    die("Failed to write to the file.");
}
fclose($fp); 

echo "Successful!!";
//header("Location: ./index.html");
?>
