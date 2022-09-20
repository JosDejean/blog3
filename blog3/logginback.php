<?php
require 'connection.php';
$veriflog = '';
$email = $_POST ['email'];
$mdp = $_POST ['mdp'];

$stmt= $conn->prepare("SELECT email, mdp FROM users WHERE email= '$email' AND mdp= '$mdp'");
$stmt->execute();
$loggedusers = $stmt->fetchAll();



if (!empty($loggedusers)) {
    $veriflog = true;
} else {
    $veriflog = false;
}

if ((!empty ($email)) and (!empty($mdp)) and $veriflog == true) {

    echo 'vous êtes connectés';
} else {

    echo 'votre connection à échouéé';
}

?>