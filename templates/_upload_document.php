<div class="container">
    <div class="row">
        <?php 
        foreach ($documentUploads as $upload) {
            var_dump($upload['path_to']);
            echo '<div class="col-xs-12">';
            echo '<a href="files/'.$upload['path_to'].'">document</a>';
            echo '</div>';
        } 
        ?>
    </div>
</div>