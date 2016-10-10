<?php include('_header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <form>
            <div class="form-group">
                <label for="projectname">Nom du project</label>
                <input class="form-control" id="projectname" placeholder="Nom du projet">
            </div>
            <div class="form-group">
                <label for="client">Informations client</label>
                <input class="form-control" id="client" placeholder="Informations client">
            </div>
            <div class="form-group">
                <label for="contactproject">Personnes à contacter en charge du projet</label>
                <input class="form-control" id="contactproject" placeholder="Contacts projet">
            </div>
            <div class="form-group">
                <label for="objective">Objectifs</label>
                <input class="form-control" id="objective" placeholder="Objectif du projet">
            </div>
            <div class="form-group">
                <label for="target">Cibles</label>
                <input class="form-control" id="target" placeholder="Cibles du projet">
            </div>
            <div class="form-group">
                <label for="solution">Solutions</label>
                <input class="form-control" id="solution" placeholder="Solutions">
            </div>
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>


<?php include('_footer.php') ; ?>


