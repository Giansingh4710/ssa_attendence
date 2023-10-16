<?php
header("Access-Control-Allow-Origin: *");

//ini_set('display_errors', 1);
//error_reporting(E_ALL);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

// $fp = fopen("./theText.txt", "w"); 
// if ($fp === false) {
//     die("Failed to open the file for writing.");
// }
//
// //ob_flush();
// if (fwrite($fp, $_POST["theText"]) === false) {
//     die("Failed to write to the file.");
// }
// fclose($fp); 
//
// header("Location: ./index.html");
?>
