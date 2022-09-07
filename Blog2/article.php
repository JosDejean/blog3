<DOCTYPE html>

    <body>
    <?php
    include ('header.php');
    include ('connection.php');

    $stmt= $conn->prepare("SELECT title, content FROM articles WHERE article_id = '$articleid'");
    $stmt->execute();
  $articles = $stmt->fetchAll();

 foreach ($articles as $article)
{
    $articleid = $_GET ['articleid'];
    ?>


        <h3> <?php echo $article['title']; ?></h3>

        <p>  <?php echo $article['content'];?> </p>
    <form method="post" action="commentfunction.php"

    <label for="author">nom</label>
    <input type="text" id="author" name="author"> <br>

    <label for="comment">votre commentaire</label>
    <input type="text" id="comment" name="comment"> <br>

    <input type="hidden" id="comment_id" name="comment_id" value=" ">
    <input type="hidden" id="id" name="id" value=" <?php ?>">

    <input type="submit" value="commentez" name="commentez"></form>


    <?php
}
    ?>







    </body>












</DOCTYPE>

