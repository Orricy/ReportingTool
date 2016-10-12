<div class="container">
    <div class="row">
        <h3 class="text-center">Avez-vous un cahier des charges</h3>
        <div class="col-xs-6">
            <a class="btn btn-block btn-default" href="form2.php">Oui</a>
        </div>
        <div class="col-xs-6">
            <a class="btn btn-block btn-default" href="formone.php">Non, je le fais en ligne</a>
        </div>
    </div>
    <div class="row">
        <h3 class="text-center">Upload de vos fichier(s)</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="avatar" id="exampleInputFile">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>