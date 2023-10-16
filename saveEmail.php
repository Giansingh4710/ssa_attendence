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
$vgKirpa = json_decode('"\u0a35\u0a3e\u0a39\u0a3f\u0a17\u0a41\u0a30\u0a42\u0020\u0a15\u0a3f\u0a30\u0a2a\u0a3e"');
$successMessage = "'". $_POST['email']. "': saved successfully $vgKirpa";
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .success-message {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      text-align: center;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="success-message">
    <?php echo $successMessage; ?>
  </div>
</body>
</html>

