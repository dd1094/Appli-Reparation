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

<table class= table table-striped>
              <thead>
                <tr>
                  <td>Numéro d'incident</td>
                  <td>Prénom</td>
                  <td>Nom</td>
                  <td>Type d'appareil</td>
                  <td><td>
                </tr>
              </thead>
              <?php /*Boucle permettant d'afficher tout les sujets de discussion et leurs informations */?>
              <tbody>
                <?php foreach( $incident as $unIncident ){ ?>
                  <tr>
                    <td><?php echo $unIncident[ 'idInc'] ; ?></td>
                    <td><?php echo $unIncident[ 'prenomCli'] ; ?></td>
                    <td><?php echo $unIncident[ 'nomCli'] ; ?></td>                 
                    <td><?php echo $unIncident[ 'libTypeApp'] ; ?></td>
                    <?php if ($idEtatInc == 1){?>
                        <td><a type="button" class="btn btn-outline-dark" href="<?php echo '../controleur/ctrl-montrerInc.php?idInc=' . $unIncident[ 'idInc' ].'&idTypeApp=' . $unIncident['idTypeApp'];?>">Diagnostiquer</a></td>
                    <?php } 
					 elseif ($idEtatInc == 2){?>
						<td><a type="button" class="btn btn-outline-dark" href="<?php echo '../controleur/ctrl-retourner.php?idInc=' . $unIncident[ 'idInc' ].'&idTypeApp=' . $unIncident['idTypeApp'].'&idEtatInc='.$idEtatInc;?>">Retourner</a></td>
					<?php } 
					else{?>
						<td><a type="button" class="btn btn-outline-dark" href="<?php echo '../controleur/ctrl-retourner.php?idInc=' . $unIncident[ 'idInc' ].'&idTypeApp=' . $unIncident['idTypeApp'].'&idEtatInc='.$idEtatInc;?>">Consulter</a></td>
					<?php }?>
                  </tr>
                <?php } ?>
              </tbody>   
          </table>
