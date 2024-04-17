<?php
require_once 'connexion.php';
if(isset($_POST['send'])){
    $nom=$_POST['name'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $message=$_POST['message'];
     
$insertion=$pdo->prepare("INSERT INTO contact(nom,email,telephone,message) VALUES(?,?,?,?)");
$insertion->execute(array($nom, $email,$tel,$message));
echo ' <script> alert("Message effectuez. nous vous contactons des que possible."); </script>';

header('Location:index.html');

}

?> 