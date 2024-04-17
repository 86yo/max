<?php
try{
$pdo=new PDO("mysql:host=localhost;dbname=travelagency","root","");
}
catch(Exception $e){
echo $e->getMessage();
}
?>