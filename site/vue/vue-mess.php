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
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nom entreprise</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controleur/ctrl-listerInc.php?idEtatInc=1">Appareils en cours d'intervention</a>
		<li class="nav-item">
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controleur/ctrl-listerInc.php?idEtatInc=2">Appareils en cours d'intervention</a>
		<li class="nav-item">
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controleur/ctrl-listerInc.php?idEtatInc=3">Historique</a>
		<li class="nav-item">
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<p>Vous avez distingué les pannes suivantes : <?php foreach( $panne as $unePanne ){?><?php echo $unePanne[ 'libelleidTypePanne'].", ";?> <?php } ?>.</p>
<p>Vous avez ajouté le commentaire suivant : </p><?php echo $commTech ?>
<p> Le client devra payer la somme de <?php foreach( $prix as $unPrix ){?><?php echo $unPrix[ 'SUM(prixReparation)'] . " $"?> ;<?php } ?>

<a href="../controleur/ctrl-listerInc.php?idEtatInc=1">Retourner à la liste des incidents</a>