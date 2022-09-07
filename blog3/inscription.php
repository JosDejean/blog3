

    <form class="container-fluid text-center" method="post" action="inscrifunction.php" enctype="multipart/form-data">

        <label for="nom">nom</label>
        <input type="text" id="nom" name="nom"> <br>


        <label for="prénom">prénom</label>
        <input type="text" id="prénom" name="prénom"> <br>

        <label for="email">email</label>
    <input type="email" id="email" name="email"> <br>

    <label for="mdp">mdp</label>
    <input type="password" id="mdp" name="mdp" minlength="8"> <br>



    <label for="check">j'accepte la politique de confidentialité</label>
    <input type="checkbox" id="check" name="check" required="required"> <br>




    <input type="reset" value="vider le formulaire">

    <input type="submit" value="inscription" name="inscription">


</form>
