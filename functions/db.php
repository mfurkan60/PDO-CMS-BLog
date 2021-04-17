<?php !defined("index") ? die("Bu sayfaya böyle ulaşamazsınız") : null;   ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    //piggy is database name 
  $db = new PDO("mysql:host=$servername;dbname=piggy", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>