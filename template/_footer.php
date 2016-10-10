<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
	    <div class="modal-content" id="modal-correction">
	    	<h3 class="text-center">Connectez-vous</h3>
	      	<form class="form-horizontal col-sm-6" id="connect" method="POST" action="index.php">
			  	<div class="form-group" id="form-top">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				    	<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    		<div class="col-sm-10">
			      			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
			    		</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<div class="checkbox">
			        		<label>
			          			<input type="checkbox" name="remenber"> Rester connecté
			        		</label>
			      		</div>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" value="Connecter" class="btn btn-default">Sign in</button>
			    	</div>
			  	</div>
			</form>
			<div class="col-sm-6" id="social-connect">
				<div class="col-sm-12">
					<h5 class="text-center">Ou</h5>
					<a href="register.php"><h4 class="text-center">Inscrivez-vous</h4></a>
				</div>
			</div>
	    </div>
  	</div>
</div>
<div id="footer" class="col-xs-12">
	<p class="text-center" id="author-quote">Fait pas Damien Duvernois. Une production de l'<a href="http://www.iim.fr/">IIM</a></p>
</div>
</body>
</html>