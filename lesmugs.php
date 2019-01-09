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

if ($conn->connect_error){ print_r("mugs".$conn->connect_error);}

else{$conn->select_db($dbname);}




function affiche1ER (){

    global $conn;

    $sql="SELECT id FROM mugs ";

    $result=$conn->query($sql);
    if($conn->query($sql) === TRUE){

        echo "Les ont été modifier<br>";

    }else{

        print_r("mugs" . $conn->error);

    }

    while($row = $result->fetch_assoc()) {

        echo $row['mugs'].'<br>';}
    $conn->query($sql);}



affiche1ER();
function lemug(){

    global $conn;

    $mugs=$_GET['mugs'];

    $sql="INSERT INTO 'mugs' VALUES(['id'],'$mugs';'$conn') ";
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
    $sql = "SELECT id,description from mugs"; $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) { echo"id =".$row['id']." mugs =".$row['description']."

"; }
    $sql='SELECT * FROM `eleves_mugs`';


$conn->query($sql);
}
elvmugs();