<?php

include('templates/_header.php');

?>

    <div class="container-fluid accueil">
        <div class="col-md-8 col-md-offset-2">
            <h1>Méthodes de travail</h1>

            <form id="form_methode">

                <label for="fb">Facebook</label><br>
                <input type="radio" name="fb" value="Oui"> Oui
                <input type="radio" name="fb" value="Non"> Non
                <input  id="lien_fb" type="text" class="form-control"  name="name" placeholder="Si oui, déposez le lien ici">
                <input  id="mdp_fb" type="text" class="form-control"  name="name" placeholder="Mot de passe"><br>

                <label for="fb">Google Drive</label><br>
                <input type="radio" name="drive" value="Oui"> Oui
                <input type="radio" name="drive" value="Non"> Non
                <input  id="lien_drive" type="text" class="form-control"  name="name" placeholder="Si oui, déposez le lien ici">
                <input  id="mdp_drive" type="text" class="form-control"  name="name" placeholder="Mot de passe"><br>

                <label for="fb">Github</label><br>
                <input type="radio" name="git" value="Oui"> Oui
                <input type="radio" name="git" value="Non"> Non
                <input  id="lien_git" type="text" class="form-control"  name="name" placeholder="Si oui, déposez le lien ici">
                <input  id="mdp_git" type="text" class="form-control"  name="name" placeholder="Mot de passe"><br>

                <label for="fb">Autre</label><br>
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Nom">
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Lien"><br>
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Nom">
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Lien"><br>
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Nom">
                <input  id="autre" type="text" class="form-control"  name="name" placeholder="Lien"><br>


                <input type="submit" class="btn btn-default" name="Suite">
            </form>

            CYCLES
        </div>
    </div>



<?php

include('templates/_footer.php');

?>
