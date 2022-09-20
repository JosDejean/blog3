<?php
include 'head.php';
include 'header.php';
?>


<h1 class="text-center"> ajoutez un article</h1>

    <div class="container">
        <div class="row">

                <form class="badge text-bg-light p-3 col align-self-center" method="post" action="submitarticles.php"

                <label class="form-label" for="title">titre</label>
                <input class="form-control" type="text" id="title" name="title"> <br>

                <label class="form-label" for="content">votre article</label>
                <input class="form-control" type="text" id="content" name="content"> <br>


                <label class="form-label" for="pseudo">votre nom</label>
                <input class="form-control" type="text" id="pseudo" name="pseudo"> <br>
                <div class="text-center">
                    <button class="btn btn-success align-self-center" type="submit" name="submit">submit article
                    </button>
                </div>
                </form>
        </div>

    </div>

<?php
include 'footer.php';
?>