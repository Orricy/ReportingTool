<?php
include('templates/_header.php');
?>

    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <h1>Introduction</h1>

            <form method="post" action="test2.php"> 

                <label for="name">Nom du projet</label><br>
                <input name="project_name" id="project_name" type="text" class="form-control"  placeholder="Nom du projet"><br>
                <label for="pseudo">Avez-vous un cahier des charges?</label><br>

                <button type="submit" class="btn btn-default">Oui</button>
                <a class="btn btn-default" href="formone.php">Non, je le fais en ligne</a>
            </form>

        </div>
    </div>


<?php
include('templates/_footer.php');
?>