<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <a class="btn btn-large btn-block btn-success" href="upload.php">Afficher</a>
        </div>
        <div class="col-xs-6">
            <a class="btn btn-large btn-block btn-danger" href="new.php">Nouveau</a>
        </div>
    </div>
    <div class="row">
        <?php 
        foreach ($allDocuments as $document) {
            echo '<div class="col-xs-12">';
            echo '<a class="btn btn-large btn-block btn-info" href="select.php?document='.$document['id'].'">'.$document['id'].'</a>';
            echo '</div>';
        } 
        ?>
    </div>
</div>