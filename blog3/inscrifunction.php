<?php

$nom = $_POST ['nom'];
$prénom = $_POST ['prénom'];
$pseudo = $_POST ['pseudo'];
$email = $_POST ['email'];
$mdp = $_POST ['mdp'];











    include('connection.php');


$stmt = $conn->prepare ("SELECT email FROM users WHERE email = '$email'");
$stmt->execute();
$inscription = $stmt->fetchAll();

    if ($inscription) {
        echo 'email already exists';
    } else {

        $sql = "INSERT INTO users (nom, prénom, pseudo, email, mdp) VALUES ('$nom','$prénom','$pseudo','$email','$mdp')";
        $conn->exec($sql);
        header('location: login.php');
    }

?>