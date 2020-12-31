<?php 

$filename = 'model/class/php/connexion.php';
if (!file_exists($filename)) {
   // echo "Le fichier $filename existe pas";
    include("config.php"); // demande un tableau des valeurs
    
} else {
       include("connexion.php");

  try {
    $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
 
  //  echo "Le fichier $filename n'existe pas.";
}
?>