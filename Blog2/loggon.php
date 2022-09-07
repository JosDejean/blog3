<?php
$veriflog = '';

$email = $_POST ['email'];
$mdp = $_POST ['mdp'];
require 'connection.php';


$sqlQuery = "SELECT email, mdp FROM users WHERE email='$email' AND mdp='$mdp'";

$loggin = $conn->prepare($sqlQuery);
$loggin->execute();
$loggedusers = $loggin->fetchAll();


try {
    if (!empty($loggedusers)) {
        $veriflog = true;
    } else {
        $veriflog = false;
    }

}
catch  (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}







try {

    if ((!empty ($email)) and (!empty($mdp)) and $veriflog == true) {


        echo 'vous êtes connectés';
    } else {

        echo 'votre connection à échouéé';
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}




