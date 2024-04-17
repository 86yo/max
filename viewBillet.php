<?php
require_once 'connexion.php';
    
$recup=$pdo->prepare("SELECT * FROM billet");
$recup->execute();

?> 