<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PBP</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="lib/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="model/functions.fn.js"></script>
</head>
<body onresize="getSize()">
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
				<div class="col-md-3 col-sm-3 col-xs-6 navButton">
					<button type="button" class="btn btn-default btn-block bridge-one" onclick="onmenu('.bridge-one', '#bridge-one', 'btn btn-default btn-block bridge-one active');">Brigdge</button>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 navButton">
					<button type="button" class="btn btn-default btn-block bridge-two" onclick="onmenu('.bridge-two', '#bridge-two', 'btn btn-default btn-block bridge-two active');">Content</button>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 navButton">
					<button type="button" class="btn btn-default btn-block bridge-three" onclick="onmenu('.bridge-three', '#bridge-three', 'btn btn-default btn-block bridge-three active');">Info</button>
				</div>
				<!--Modal connection in template footer-->
				<?php  
					if (empty($_SESSION)) {
						echo '
						<div class="col-md-3 col-sm-3 col-xs-6 navButton">
							<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Connection</button>
						</div>
						';
					}
					else{
						echo '<div class="col-md-3 col-sm-3 col-xs-6">';
							echo '<div class="col-md-9 col-sm-9 col-xs-9" id="user-name">';
								echo '<a href="dashboard.php" role="button" id="user-content" class="btn btn-default btn-block">'.$_SESSION['username'].'</a>';
							echo '</div>';
							echo '<div class="col-md-3 col-sm-3 col-xs-3" id="user-face">';
								if (!empty($_SESSION['picture'])) {
									echo '<a href="profile.php"><img src="image/profile_pic/'.$_SESSION['picture'].'" class="img-user" alt="user pic"></a>';
								}
								else
									echo '<a href="profile.php"><img src="image/profile_pic/no-pic-user.jpg" class="img-user" alt="no pic"></a>';
							echo '</div>';	
						echo '</div>';
						
					}	
				?>
			</div>
		</div>
	</div>