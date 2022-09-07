<form method="post" action="commentfunction.php"

    <label for="author">nom</label>
    <input type="text" id="author" name="author"> <br>

    <label for="comment">votre commentaire</label>
    <input type="text" id="comment" name="comment"> <br>

    <input type="hidden" id="comment_id" name="comment_id" value=" ">
    <input type="hidden" id="id" name="id" value=" <?php ?>">

    <input type="submit" value="commentez" name="commentez"></form>