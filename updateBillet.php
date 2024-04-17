<?php
require_once 'connexion.php';
 
    $id=$_POST['id'];
    $statut="traité avec succès";
    $update=$pdo->prepare("UPDATE billet SET statut=? Where id=?");
    $update->execute(array($statut,$id));
    header('Location:billets.php');
 

?>