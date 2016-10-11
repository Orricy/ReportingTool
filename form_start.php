<?php
include('templates/_header.php');
?>

    <div class="container-fluid accueil">
        <div class="col-md-8 col-md-offset-2">
            <h1>Introduction</h1>

        <form id="form_name">

                <label for="name">Nom du projet</label><br>
                <input  id="name" type="text" class="form-control"  name="name" placeholder="Nom du projet"><br>
                <label for="pseudo">Avez-vous un cahier des charges?</label><br>

                <a class="btn btn-default" href="form2.php">Oui</a>
                <a class="btn btn-default" href="form1.php">Non, je le fais en ligne</a>

        </form>
        </div>
    </div>


<?php
include('templates/_footer.php');
?>