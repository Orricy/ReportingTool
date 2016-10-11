<?php

include('templates/_header.php');

?>

<div id="form1">
    <div class="col-md-8 col-md-offset-2">

    <h1>Présentation du projet</h1>

        <form>

            <label for="pitch">Pitch du projet :</label><br>
            <input type="text" id="pitch" class="form-control" placeholder="Écrivez le pitch du projet"><br>

            <label for="brief">Brief du projet :</label><br>
            <input type="text" id="brief" class="form-control" placeholder="Écrivez le brief du projet"><br>

            <label for="infsclient">Informations Contact Client :</label><br>
            <input type="text" id="client_surname" class="form-control" placeholder="Prénom du client"><br>
            <input type="text" id="client_lastname" class="form-control" placeholder="Nom du client"><br>
            <input type="text" id="client_phone" class="form-control" placeholder="Téléphone du client"><br>
            <input type="text" id="client_mail" class="form-control" placeholder="Mail du client"><br>
            <input type="text" id="client_city" class="form-control" placeholder="Ville du client"><br>
            <input type="text" id="client_postal" class="form-control" placeholder="Code postal du client"><br>
            <input type="text" id="client_adress" class="form-control" placeholder="Adresse du client"><br>

            <label for="infsdecis">Informations Contact Décisionnaire :</label><br>
            <input type="text" id="deci_surname" class="form-control" placeholder="Prénom du décisionnaire"><br>
            <input type="text" id="deci_lastname" class="form-control" placeholder="Nom du décisionnaire"><br>
            <input type="text" id="deci_phone" class="form-control" placeholder="Téléphone du décisionnaire"><br>
            <input type="text" id="deci_mail" class="form-control" placeholder="Mail du décisionnaire"><br>
            <input type="text" id="deci_city" class="form-control" placeholder="Ville du décisionnaire"><br>
            <input type="text" id="deci_postal" class="form-control" placeholder="Code postal du décisionnaire"><br>
            <input type="text" id="deci_adress" class="form-control" placeholder="Adresse du décisionnaire"><br>

            <label for="debproj">Date de début du projet :</label><br>
            <input type="text" id="debproj" class="form-control" placeholder="Date de début"><br>

            <label for="finproj">Date de fin du projet :</label><br>
            <input type="text" id="finproj" class="form-control"placeholder="Date de fin"><br><br>

            <!-- UPLOAD GANTT -->

            <input type="submit" class="btn btn-success" value="Continuer">

        </form>
    </div>

</div>



<?php

include('templates/_footer.php');


/*Pitch -> text NOT NULL
Brief -> varchar(150) NOT NULL
Informations client (contact) -> text NOT NULL
Informations décisionnaire (contact) -> text NOT NULL
Dates importantes -> text NOT NULL
Gantt (bouton upload)
Bouton valider (passage étape suivante) */


?>


