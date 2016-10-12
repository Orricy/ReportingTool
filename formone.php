<?php 
session_start();
include('templates/_header.php'); 
?>

<div class="container">
    <div class="row">
        <form method="post" action="test.php">
            <div class="form-group">
                <label for="info_client">Informations client</label>
                <input name="info_client" class="form-control" id="client" placeholder="Informations client">
            </div>
            <div class="form-group">
                <label for="info_personne">Personnes à contacter en charge du projet</label>
                <input name="info_personne" class="form-control" id="contactproject" placeholder="Contacts projet">
            </div>
            <div class="form-group">
                <label for="objectif">Objectifs</label>
                <input name="objectif" class="form-control" id="objective" placeholder="Objectif du projet">
            </div>
            <div class="form-group">
                <label for="cible">Cibles</label>
                <input name="cible" class="form-control" id="target" placeholder="Cibles du projet">
            </div>
            <div class="form-group">
                <label for="solution">Solutions</label>
                <input name="solution" class="form-control" id="solution" placeholder="Solutions">
            </div>
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>


<?php include('templates/_footer.php'); ?>


