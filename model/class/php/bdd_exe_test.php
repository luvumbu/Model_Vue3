<?php
header("Access-Control-Allow-Origin: *");
include("Mybdd.php");
$dbname= $_POST["dbname"];
$username= $_POST["username"];
$password= $_POST["password"];
//bokonzi_all
//$dbname
$apple = new Fruit("localhost",$username,$password,$dbname);
$apple->set_select('SELECT * FROM `club` WHERE `club_nom`="alors"');
$apple->set_row_name("club_nom");// demande des information dans le arroow 
$apple->set_row_name("club_region");// demande des information dans le arroow 
$apple->exe(); // execution du programme 
echo $apple->number_row_value(0);  


$nom_file = "../../../txt.txt";
$texte = "Hello world!";

// création du fichier
$f = fopen($nom_file, "x+");
// écriture
fputs($f, $texte );
// fermeture
fclose($f);

?>