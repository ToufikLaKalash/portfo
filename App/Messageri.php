<?php
require 'DB.php';
$db = DB::getDB();

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])){
    $msg = htmlspecialchars($_POST['message']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);

    $message = $db->prepare("INSERT INTO messages(nom, email, message, date) VALUES(:nom, :mail, :message, NOW());");
    $message->bindParam(':nom', $nom);
    $message->bindParam(':mail', $email);
    $message->bindParam(':message', $msg);
    $message->execute();
    header('Location: ../contact.php');
}else{
    echo "<script>alert('Les champs ne peuvent pas être vides');</script>";
    header('Location: ../contact.php');
}