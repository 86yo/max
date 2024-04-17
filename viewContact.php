<?php
require_once 'connexion.php';
    
$recup=$pdo->prepare("SELECT * FROM contact");
$recup->execute();

?> 