<?php

require 'connection.php';

//récupération des données table article pour front
$stmt = $conn->prepare("SELECT article_id, title, content, pseudo, date FROM articles ORDER BY article_id ASC ");
$stmt->execute();
$articles = $stmt->fetchAll();

?>
<div class="listing-articles container-fluid text-center">

    <div class="row">

        <?php /*création d'une boucle pour affichage d'articles*/
        foreach ($articles as $article) {
            ?>

            <div class="article-items col-md-3">


                <h3> <?php echo $article['title'];
                    $article_id = $article ['article_id'];
                    $stmt = $conn->prepare("SELECT note FROM comments WHERE article_id= $article_id");
                    $stmt->execute();
                    $array = $stmt->fetch(PDO::FETCH_ASSOC);
                    $average = array_sum($array) / count($array);
                    ?>(<?php echo $average;?>) </h3>

                <p>  <?php echo $article['content']; ?> </p>
                <a href="article.php?articleid=<?php echo $article['article_id']; ?>"> lire la suite </a>
                <strong><?php echo $article['auteurs']; ?></strong>
                <?php echo date("d-m-Y", strtotime($article['date']));?>





                <?php
                $article_id = $article ['article_id'];

                //récup des commentaire pour article

                include 'comments.php';
                $stmt = $conn->prepare("SELECT comment_id, article_id, comment, nom, date, note FROM comments WHERE article_id = $article_id");
                $stmt->execute();
                $comments = $stmt->fetchAll();

                //affichage des commentaire par article
                ?>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#readcomment-<?php echo $article_id ?>" aria-expanded="false"
                        aria-controls="readcomment">
                    lire commentaires <?php $stmt = $conn->prepare("SELECT COUNT(comment) AS total FROM comments  WHERE  article_id=$article_id");
                    $stmt->execute();
                    $total = $stmt->fetch(PDO::FETCH_ASSOC);

                      echo  $total ['total']; ?>

                </button>

                <div class="collapse" id="readcomment-<?php echo $article_id ?>">
                    <?php
                    foreach ($comments as $comment) {




                        echo $comment ['comment']; ?>
                        <strong> <?php echo $comment ['nom'] ?> </strong>


                        <?php echo date("d-m-Y", strtotime($comment ['date']));?>

                       ( <?php echo $comment ['note']; ?>)


                    <?php } ?>

                </div>


            </div>

            <?php
        }
        ?>
    </div>
</div>


