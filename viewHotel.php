<?php
require_once 'connexion.php';
    
$recup=$pdo->prepare("SELECT * FROM hotel");
$recup->execute();

?> 