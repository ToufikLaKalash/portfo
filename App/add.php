<?php
require 'DB.php';
$db = DB::getDB();

if(isset($_POST['nomProjet'])){
    var_dump($_POST);
    $nom = $_POST['nomProjet'];
    $date = $_POST['dateProjet'];
    $texte = $_POST['texteProjet'];

    $rq = "INSERT INTO projets(nom, date, texte) VALUES('{$nom}', '{$date}', '{$texte}');";
    $db->query($rq);
    header('location: ../admin.php');

}else if(isset($_POST['nomXP'])){

}