<?php
require_once 'connexion.php';
 
    $id=$_POST['id'];
    $statut="Annuller";
    $update=$pdo->prepare("UPDATE hotel SET statut=? Where id=?");
    $update->execute(array($statut,$id));
    header('Location:admin.php');
 

?>