<?php
require_once 'connexion.php';
if(isset($_POST['reserve'])){
    $nom=$_POST['name'];
    $tel=$_POST['telephone'];
    $type=$_POST['type'];
    $date=$_POST['date'];
    $duree=$_POST['duree'];
    $ville=$_POST['ville'];
    $email=$_POST['email'];
    $budjet=$_POST['budjet'];
     
$insertion=$pdo->prepare("INSERT INTO hotel(nom,email,telephone,ville,typehotel,date,duree,budjet) VALUES(?,?,?,?,?,?,?,?)");
$insertion->execute(array($nom, $email,$tel,$ville,$type,$date,$duree,$budjet));
echo ' <script> alert("Reservation effectuez. nous vous contactons en cas de probleme."); </script>';

header('Location:more.html');
 
}

?>