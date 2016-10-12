<?php

session_start();

include('templates/_header.php');

?>

    <div class="container-fluid accueil">
        <div class="col-md-8 col-md-offset-2">
            <h1>Méthodes de travail</h1>

            <form method="post" action="test_3.php"> 

                <label for="fb">Facebook</label><br>
                <input type="radio" name="fb" value="Oui"> Oui
                <input type="radio" name="fb" value="Non"> Non
                <input name="lien_fb" id="lien_fb" type="text" class="form-control"   placeholder="Si oui, déposez le lien ici">
                <input name="mdp_fb" id="mdp_fb" type="text" class="form-control"   placeholder="Mot de passe"><br>

                <label for="drive">Google Drive</label><br>
                <input type="radio" name="drive" value="Oui"> Oui
                <input type="radio" name="drive" value="Non"> Non
                <input name="lien_drive" id="lien_drive" type="text" class="form-control" placeholder="Si oui, déposez le lien ici">
                <input name="mdp_drive" id="mdp_drive" type="text" class="form-control" placeholder="Mot de passe"><br>

                <label for="git">Github</label><br>
                <input type="radio" name="git" value="Oui"> Oui
                <input type="radio" name="git" value="Non"> Non
                <input name="lien_git" id="lien_git" type="text" class="form-control" placeholder="Si oui, déposez le lien ici">
                <input name="mdp_git" id="mdp_git" type="text" class="form-control" placeholder="Mot de passe"><br>

                <label for="autre">Autre</label><br>
                <input  name="autre_nom1" id="autre_nom1" type="text" class="form-control" placeholder="Nom">
                <input  name="autre_lien1" id="autre_lien1" type="text" class="form-control" placeholder="Lien"><br>
                <input  name="autre_nom2" id="autre_nom2" type="text" class="form-control" placeholder="Nom">
                <input  name="autre_lien2" id="autre_lien2" type="text" class="form-control" placeholder="Lien"><br>
                <input  name="autre_nom3" id="autre_nom3" type="text" class="form-control" placeholder="Nom">
                <input  name="autre_lien3" id="autre_lien3" type="text" class="form-control" placeholder="Lien"><br>


                <button type="submit" class="btn btn-default">Valider</button>
            </form>

            CYCLES
        </div>
    </div>



<?php

include('templates/_footer.php');

?>
