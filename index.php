<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne



$age="age";

$nom="nom";

$prenom="prenom";

$servername="localhost";

$username="id7331118_bryan";

$password="bryanbultot";

$dbname="id7331118_exercice";

$conn= new mysqli($servername,$username,$password);

if ($conn->connect_error){ die("Connection failed:".$conn->connect_error);}

    else{$conn->select_db($dbname);}





    function lapremiere($prenom,$nom,$age){

        global $conn;

        $sql= "INSERT INTO eleves VALUES ('','prenom','nom','age')";
    }
    function affiche1 (){

        global $conn;

        $sql="SELECT * FROM eleves";

        $result=$conn->query($sql);

        while($row = $result->fetch_assoc()) {

            echo $row['prenom']." ".$row['nom']." ".$row['age'].'<br>';}}
affiche1();




    function upelves($id,$nom,$prenom,$age){

        global $conn;

        $sql = "UPDATE eleves set nom = '$nom',prenom='$prenom',age='$age' where id = $id";

        $conn->query($sql);
    }

    upelves('1','dhoo','john','49');

    function dlteleves($id){

        global $conn;

        $sql="DELETE FROM eleves where id='$id'";$conn->query($sql);

    }
    dlteleves(3);





    function neweleves(){




        global $conn;

        $prenom = $_GET['prenom'];

        $nom = $_GET['nom'];

        $age = $_GET['age'];

        $sql = "INSERT INTO eleves VALUES ('','$prenom','$nom','$age')";

    $conn->query($sql);
        if($conn->query($sql) === TRUE){



        }else{

            die("ERREUR: " . $conn->error);



        }
    }
 neweleves();




?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="front.html" method="get">
    <a href="front.html">retour a l'index</a>

</form>
</body>
</html>




