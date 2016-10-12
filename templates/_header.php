<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PBP</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<noscript>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="alert alert-info text-center" role="alert" id="javascript"><b>Your browser does not support JavaScript!</b><br>To have full fonctionnality on this page use a more recent <a href="https://www.google.fr/chrome/browser/desktop/" class="alert-link">browser</a></div>
				</div>
			</div>
		</div>
	</noscript>
	<div class="container-fluid">
		<div class="row">
			<div class ="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1" id="header">
                <?php if(isset($_SESSION['document'])): ?>
                    <div class="col-xs-12 navButton">
                        <a type="button" href="mydocument.php" class="btn btn-default btn-block">Numéro de dossier : <?php echo $_SESSION['document']; ?></a>
                    </div>
                <?php endif; ?>
				<div class="col-md-3 col-sm-3 col-xs-6 navButton">
					<a type="button" class="btn btn-default btn-block" href="index.php">Home</a>
				</div>
                <div class="col-md-3 col-sm-3 col-xs-6 navButton">
                    <a type="button" class="btn btn-default btn-block" href="upload.php">Upload</a>
                </div>
				<div class="col-md-3 col-sm-3 col-xs-6 navButton">
					<a type="button" class="btn btn-default btn-block" href="quit.php">Déconnexion</a>
				</div>

				<div class="btn-group col-md-3 col-sm-3 col-xs-6">
					<button class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Formulaires <span class="caret"></span>
					</button>
					<ul class="dropdown-menu col-sm-12">
						<li><a href="formone.php">Informations clients</a></li>
						<li><a href="form2.php">Présentation du projet</a></li>
						<li><a href="form3.php">Méthode de travail</a></li>
						<li><a href="form4.php">Fichiers</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-12 col-md-offset-2">
                <?php isset($flashType) ? $type = $flashType : $type = 'danger' ?>
                <?php if(isset($error)): ?>
                    <div class="alert alert-<?php echo $type ?> alert-dismissible fade in" role="alert">
                        <button class="close" aria-label="Close" type="button" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p><?php echo $error ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>