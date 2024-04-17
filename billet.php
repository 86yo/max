<?php
require_once 'connexion.php';
if(isset($_POST['reserve'])){
    $nom=$_POST['name'];
    $tel=$_POST['telephone'];
    $areoport=$_POST['areoport'];
    $ville=$_POST['ville'];
    $email=$_POST['email'];
    $classe=$_POST['classe'];
    $date=$_POST['date'];
     
$insertion=$pdo->prepare("INSERT INTO billet(nom,email,telephone,depart,destination,classevoyage,datevoyage) VALUES(?,?,?,?,?,?,?)");
$insertion->execute(array($nom, $email,$tel,$areoport,$ville,$classe,$date));
echo ' <script> alert("Reservation de billet effectuez. nous vous contactons en cas de probleme."); </script>';

header('Location:more.html');
}

?>