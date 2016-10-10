<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PBP</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
			</div>
		</div>
	</div>