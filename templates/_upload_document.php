<div class="container">
    <div class="row">
        <?php 
        foreach ($documentUploads as $upload) {
            echo '<div class="col-xs-12">';
            echo '<a type="button" class="btn btn-primary" href="files/'.$upload['path_to'].'">'.$upload['name'].'</a>';
            echo '</div>';
        } 
        ?>
    </div>
</div>