<?php

$author = $_POST ['author'];
$comment = $_POST ['comment'];
$commentid = $_POST ['comment_id'];
require ('connection.php');



$sql = "INSERT INTO comments ( comment_id, author, comment) VALUES ('$author', '$comment', '$commentid')";
$conn->exec($sql);


