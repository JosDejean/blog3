

<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#formcomment" aria-expanded="false" aria-controls="formcomment">
   commentez
</button>



<div class="collapse" id="formcomment">
<form method="post" action="commentfunctions.php">

    <label for="nom">nom</label>
    <input type="text" id="nom" name="nom"> <br>

    <label for="comment">votre commentaire</label>
    <input type="text" id="comment" name="comment"> <br>


    <label for="note"> notez l'article</label>
    <input type="text" id="note" name="note"> <br>



    <input type="hidden" id="articleid" name="article_id" value="<?php echo $article['article_id']; ?>">

    <button class="btn btn-secondary" type="submit" name="commentez"> commentez</button>


</form>
</div>



