<?php
$title = $_POST ['title'];
$content = $_POST ['content'];
$pseudo= $_POST ['pseudo'];
require ('connection.php');



$sql = "INSERT INTO articles (title, content, pseudo) VALUES ( '$title', '$content', '$pseudo')";
$conn->exec($sql);

echo 'article ajouté';

?>