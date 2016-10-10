<?php

include('_header.php');

?>

<div id="form1">

    <form>

        <label>Pitch du projet :</label><br>
        <input type="text" name="pitch" placeholder="Écrivez le pitch du projet"><br><br>

        <label>Brief du projet :</label><br>
        <input type="text" name="brief" placeholder="Écrivez le brief du projet"><br><br>

        <label>Informations Contact Client :</label><br>
        <input type="text" name="client_surname" placeholder="Prénom du client"><br>
        <input type="text" name="client_lastname" placeholder="Nom du client"><br>
        <input type="text" name="client_phone" placeholder="Téléphone du client"><br>
        <input type="text" name="client_mail" placeholder="Mail du client"><br>
        <input type="text" name="client_city" placeholder="Ville du client"><br>
        <input type="text" name="client_postal" placeholder="Code postal du client"><br>
        <input type="text" name="client_adress" placeholder="Adresse du client"><br>

        <label>Informations Contact Décisionnaire :</label><br>
        <input type="text" name="deci_surname" placeholder="Prénom du décisionnaire"><br>
        <input type="text" name="deci_lastname" placeholder="Nom du décisionnaire"><br>
        <input type="text" name="deci_phone" placeholder="Téléphone du décisionnaire"><br>
        <input type="text" name="deci_mail" placeholder="Mail du décisionnaire"><br>
        <input type="text" name="deci_city" placeholder="Ville du décisionnaire"><br>
        <input type="text" name="deci_postal" placeholder="Code postal du décisionnaire"><br>
        <input type="text" name="deci_adress" placeholder="Adresse du décisionnaire"><br>

        <label>Date de début du projet :</label><br>
        <input type="text" name="brief" placeholder="Date de début"><br><br>

        <label>Date de fin du projet :</label><br>
        <input type="text" name="brief" placeholder="Date de fin"><br><br>

        <!-- UPLOAD GANTT -->

        <input type="submit" name="Suite">

    </form>

</div>



<?php

include('_footer.php') ;


/*Pitch -> text NOT NULL
Brief -> varchar(150) NOT NULL
Informations client (contact) -> text NOT NULL
Informations décisionnaire (contact) -> text NOT NULL
Dates importantes -> text NOT NULL
Gantt (bouton upload)
Bouton valider (passage étape suivante) */


?>


