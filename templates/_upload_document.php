<div class="container">
    <div class="row">
        <?php
        foreach ($documentUploads as $upload) {
            $date = date_create($upload['created_at']);
            echo '<div class="col-xs-12 fileUploaded">';
            echo '<a type="button" class="btn btn-primary" href="files/'.$upload['path_to'].'">'.$upload['name'].'</a>';
            echo '<a href="deletedocument.php?id='.$upload['id'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
            echo '<span class="text-right">'.date_format($date, 'd-m-Y').'</span>';
            echo '</div>';
        } 
        ?>
    </div>
</div>