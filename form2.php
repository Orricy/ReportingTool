<?php

include('templates/_header.php');

?>

<div id="form1">
    <div class="col-md-8 col-md-offset-2">

    <h1>Présentation du projet</h1>

        <form>

            <label>Pitch du projet :</label><br>
            <input type="text" name="pitch" class="form-control" placeholder="Écrivez le pitch du projet"><br><br>

            <label>Brief du projet :</label><br>
            <input type="text" name="brief" class="form-control" placeholder="Écrivez le brief du projet"><br><br>

            <label>Informations Contact Client :</label><br>
            <input type="text" name="client_surname" class="form-control" placeholder="Prénom du client"><br>
            <input type="text" name="client_lastname" class="form-control" placeholder="Nom du client"><br>
            <input type="text" name="client_phone" class="form-control" placeholder="Téléphone du client"><br>
            <input type="text" name="client_mail" class="form-control" placeholder="Mail du client"><br>
            <input type="text" name="client_city" class="form-control" placeholder="Ville du client"><br>
            <input type="text" name="client_postal" class="form-control" placeholder="Code postal du client"><br>
            <input type="text" name="client_adress" class="form-control" placeholder="Adresse du client"><br>

            <label>Informations Contact Décisionnaire :</label><br>
            <input type="text" name="deci_surname" class="form-control" placeholder="Prénom du décisionnaire"><br>
            <input type="text" name="deci_lastname" class="form-control" placeholder="Nom du décisionnaire"><br>
            <input type="text" name="deci_phone" class="form-control" placeholder="Téléphone du décisionnaire"><br>
            <input type="text" name="deci_mail" class="form-control" placeholder="Mail du décisionnaire"><br>
            <input type="text" name="deci_city" class="form-control" placeholder="Ville du décisionnaire"><br>
            <input type="text" name="deci_postal" class="form-control" placeholder="Code postal du décisionnaire"><br>
            <input type="text" name="deci_adress" class="form-control" placeholder="Adresse du décisionnaire"><br>

            <label>Date de début du projet :</label><br>
            <input type="text" name="brief" class="form-control" placeholder="Date de début"><br><br>

            <label>Date de fin du projet :</label><br>
            <input type="text" name="brief" class="form-control"placeholder="Date de fin"><br><br>

            <!-- UPLOAD GANTT -->

            <input type="submit" class="btn btn-default" name="Suite">

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


