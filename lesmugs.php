<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:06
 */

$servername="localhost";

$username="id7331118_bryan";

$password="bryanbultot";

$dbname="id7331118_exercice";

$mugs='mugs';

$conn= new mysqli($servername,$username,$password);

if ($conn->connect_error){ die("Connection failed:".$conn->connect_error);}

else{$conn->select_db($dbname);}




function affiche1ER (){

    global $conn;

    $sql="SELECT id FROM mugs ";

    $result=$conn->query($sql);

    while($row = $result->fetch_assoc()) {

        echo $row['mugs']." ".'<br>';}}

affiche1ER();
function lemug(){

    global $conn;

    $mugs=$_GET['mugs'];

    $sql="INSERT INTO mugs VALUES(' ','$mugs';'$conn') ";
  ;

    $conn->query($sql);
    if($conn->query($sql) === TRUE){

        echo "Les ont été modifier<br>";

    }else{

        die("ERREUR: " . $conn->error);

    }


}
lemug();

function elvmugs(){
    global $conn;

   $sql= "SELECT mugs FROM eleves_mugs,mugs WHERE eleves_mugs.id ";
$result=$conn->query($sql);
}
elvmugs();