<!DOCTYPE html> 
<html lang="fr"> 
	
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Connexion</title>
		<meta charset="utf-8">
	</head>
		
	<body>
		<section>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #35577A;">
            <a class="navbar-brand" href="#"><img src="../logo-L7L-2.jpg" width="30" height="30" alt=""></a>
            <a class="navbar-brand" href="#">Le 7ème lieu</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="../controleur/ctrl-listerSuj.php">Sujet de discussion<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../controleur/ctrl-creerSuj.php">Créer un sujet<span class="sr-only">(current)</span></a>
				</li>
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				<a class="btn btn-outline-success my-2 my-sm-0" href="../controleur/ctrl-connecter.php">Se connecter</button>
				<a class="btn btn-outline-success my-2 my-sm-0" style="margin-left: 10px;" href="../controleur/ctrl-inscrire.php">S'inscrire</a>
			  </form>
			</div>
		</nav>
		<form method="POST">
		<div class="form-box">
			<h1 style="text-align: center;">Connexion</h1><br>
			<div class="mb-3 row" >
				<div class="cont-box">
					<form method="POST">
						<div style="margin-left: 110px;">
						<input type="text" name="idenTech" placeholder="Nom de connexion"/>
						<br>
						<br>
						<input type="password"   name="mdpTech" placeholder="Mot De Passe"/>
						</div>
					</div>
					</form>
				</div>
			<br>
			
			<input style="text-align: center;width: 47%;" type="submit" name="tsubmit" value="Valider" class="btn btn-outline-dark"></input>
			<button style="text-align: center;width: 47%;" type="reset" class="btn btn-outline-dark">Annuler</button><br><br>
			<?php /*Affichage de la variable $erreur si elle existe après envoi du formulaire*/ ?>
			<?php
		 if(isset($erreur)) { ?>
			<div class="alert alert-dark" role="alert">
        		<?php echo $erreur ;}?>
			</div>
			</form> 
			<p style="text-align: center;">Vous n'avez pas de compte? <a href="../controleur/ctrl-inscrire.php">Inscrivez-vous maintenant.</a> </p>
		</div>
		</div>
		<div class="long"></div>
		 </section>
		<footer class="bg text-center text-white" style="background-color:#8A4E20">
			<a href="https://www.facebook.com/le7emelieu" role="button"><i class="fa fa-facebook"></i></a>
			<a href="https://www.linkedin.com/company/le-7%C3%A8me-lieu/?viewAsMember=true" role="button"><i class="fa fa-linkedin"></i></a>
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 par Le 7ème Lieu
		</div>
		</footer>
		</body>
	
	