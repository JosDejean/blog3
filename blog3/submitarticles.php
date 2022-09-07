<?php
$title = $_POST ['title'];
$content = $_POST ['content'];
$auteurs = $_POST ['auteurs'];
require ('connection.php');



$sql = "INSERT INTO articles (title, content, auteurs) VALUES ( '$title', '$content', '$auteurs')";
$conn->exec($sql);

echo 'article ajouté';

?>