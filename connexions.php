<?php
require_once 'connexion.php';
if (isset($_POST['connexion'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['user'] = $username;
    $verifie = $pdo->prepare("SELECT * FROM utilisateurs WHERE username=? and password=?");
    $verifie->execute(array($username, $password));
        echo '<script> alert("Bienvenue a vous."); </script>';
        header('Location:admin.php');
    session_destroy();
}

?>