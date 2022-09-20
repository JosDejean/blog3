<?php
include 'head.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Mon Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<form method="post" action="logginback.php">

    <label for="email">Email</label>
    <input type="text" id="email" name=" email"> <br>

    <label for="mdp">MDP</label>
    <input type="text" id="mdp" name="mdp"> <br>

    <input type="submit" value="envoyer">


</form>
