<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">Créer un nouveau cahier de recettage</h3>
            <a class="btn btn-lg btn-block btn-success" href="new.php">Nouveau</a>
        </div>
    </div>
    <div class="row">
        <h3 class="text-center">Sélectionner un cahier de recettage à éditer</h3>
        <?php 
        foreach ($allDocuments as $document) {
            echo '<div class="col-xs-12">';
            echo '<a class="btn btn-large btn-block btn-info" href="select.php?document='.$document['id'].'">'.$document['id'].'</a>';
            echo '</div>';
        } 
        ?>
    </div>
</div>