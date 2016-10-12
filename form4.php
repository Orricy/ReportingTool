<?php

include('templates/_header.php');

?>

<div class="container-fluid accueil">
    <div class="col-md-8 col-md-offset-2">
        <h1>Possédez-vous :</h1>

        <form method="post" action="test_3.php"> 

            <label for="benchmark">Benchmark ?</label><br>
            <input type="radio" name="benchmark" value="Oui"> Oui
            <input type="radio" name="benchmark" value="Non"> Non
            <br>
            <label for="fb">Etude de marché ?</label><br>
            <input type="radio" name="drive" value="Oui"> Oui
            <input type="radio" name="drive" value="Non"> Non
            <br>
            <label for="fb">Zoning ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>
            <label for="fb">Wireframe ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>
            <label for="fb">Maquettes ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>
            <label for="fb">Logo ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>
            <label for="fb">Charte graphique ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>
            <label for="fb">Devis ?</label><br>
            <input type="radio" name="git" value="Oui"> Oui
            <input type="radio" name="git" value="Non"> Non
            <br>


            <button type="submit" class="btn btn-default">Valider</button>
        </form>

    </div>
</div>



<?php

include('templates/_footer.php');

?>
