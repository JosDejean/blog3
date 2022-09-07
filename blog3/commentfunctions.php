<?php


$articleid = $_POST ['article_id'];

$comment = $_POST ['comment'];
$nom= $_POST ['nom'];
$note = $_POST ['note'];
require ('connection.php');



$sql = "INSERT INTO comments ( article_id, comment, nom, note) VALUES ('$articleid', '$comment','$nom', '$note')";
$conn->exec($sql);

echo 'commentaire ajouté';

?>
