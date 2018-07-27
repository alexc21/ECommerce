<?php
include("includes/header.php");
?>

 <link rel="stylesheet" type="text/css" href="css/inscription.css">
    
  </head>

  <body>

<?php
include("includes/top_nav.php");
?>

	
	<div class="container-fluid"> 
		<h1>INSCRIPTION</h1>

		<form id="formulaire" action="requete_inscription.php" method ="POST" name="inscription" novalidate autocomplete="off">
			<div class="row">
  			<div class="col-xs-6">
    			 <input type="text" class="form-control input-lg" placeholder="Prenom" name="prenom" required ng-minlength="2" ng-maxlength="15">
        </div>
  		
  		
  			<div class="col-xs-6">
    			 <input type="text" class="form-control input-lg" placeholder="Nom" name="nom" required ng-minlength="2" ng-maxlength="15">
        </div>
  		</div>

  		<div class="row"> 
        <div class="col-xs-6">
          <input type="text" class="form-control input-lg" name="age" placeholder="Age" required>
        </div>
     	</div> 

      <div class="row"> 
        <div class="col-xs-6">
          <input type="password" class="form-control input-lg" name="mot_de_passe" placeholder="Mot de passe" required>
        </div>
      </div>

     	<div class="row"> 
       	<div class="col-xs-12">
          <input type="text" class="form-control input-lg" name="adresse_postale" id="Adresse" placeholder="Adresse">
        </div>
    	</div> 

      <div class="row">
        <div class="col-xs-6">
          <input type="text" class="form-control input-lg" name="adresse_mail" placeholder="E-mail" required>
        </div>
      </div>

      <div class="row"> 
      	<div class="col-xs-6">
      		<!-- <label for="ville">Choisissez Votre Ville</label> -->
       		<select class="form-control input-lg" name='id_ville'>
             <?php
                
               /* try
{
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}*/
                
               $categorie = $bdd->query('SELECT * from ville ');
               while($donnees = $categorie->fetch()){
                   ?>
                <option value="<?php echo $donnees['id_ville'];?>">
                    <?php 
                    echo $donnees['nom_ville']; 
                    ?>
                </option>
                <?php 
               } 
                
                ?>
          </select>
        </div>
      </div>

 			<button type="submit" class="btn btn-primary btn-lg">Inscription</button>

  	</form>
	</div>
		

<?php
include("includes/footer.php");
?>