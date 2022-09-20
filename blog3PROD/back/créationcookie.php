<?php
include 'back/connection.php';
$email = 'josquin@beonthebestside.com';
$mdp = 'reisreise5';

$stmt= $conn->prepare("SELECT email, mdp, prénom FROM users WHERE email= '$email' AND mdp= '$mdp'");

$stmt->execute();
$loggedusers = $stmt->fetchAll();


$cookie_name = "user";


foreach ($loggedusers as $loggeduser) {


    $cookie_value = 'josquin';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
} echo $cookie_value;
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
