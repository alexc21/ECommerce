<?php
include("includes/header.php");
?>

<link rel="stylesheet" type="text/css" href="css/fiche_produit.css">



<body>
<!-- NAVBAR -->
<?php
include("includes/top_nav.php");
?>
<!-- fin NAVBAR -->

	<div class="container-fluid">

		<div class="row">
    		<div class="col-md-12">
    			<h1>Fiche Produit</h1>
    		</div>
    	</div>

    	<div class="row">

    		<div class="col-md-2 ">
          		<div class="nav-gche">
          			<h3 id="titre"> CATEGORIES</h3>
          		</div>
        	</div>
    	

   
    		<div class="col-md-5">
<?php
$getid = htmlspecialchars($_GET['id_article']);
$requser = $bdd->prepare('SELECT * FROM article WHERE id_article = ?');
   $requser->execute(array($getid));
   $donnees = $requser->fetch();
?>

    			<div class="content">
    			<a href="" class="thumbnail">
          			<img class="img-responsive" src="photos/<?php echo $donnees['photo']; ?>"/>
        		</a>
        		</div>
    		</div>

    		<div class="col-md-5">
    			<div class="content desc">
	              	<h2><?php echo $donnees['nom_article']; ?></h2>
	              	<h2><?php echo $donnees['prix']; ?> €</h2>
	              	<h2>Description</h2>
	              		<p style='font-size: 20px'><?php echo $donnees['caracteristique']; ?></p>
	             	<button type="button" class="btn btn-primary">Ajoutez au panier</button>
            	</div>
    		</div>


    	</div>


	</div>

<?php
include("includes/footer.php");
?>