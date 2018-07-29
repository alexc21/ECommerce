<?php 
session_start(); 
require('connexion.php');
?>

 <link rel="stylesheet" type="text/css" href="css/top_nav.css">


<!-- Top Nav -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #849974; border-color: #32485C">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <img src="pictures/logo.png" width="50px" height="50px">
    <p id="logo" style="display: inline-block;">MY TRAVEL STUFF</p>  
  </div>

  <div class="collapse navbar-collapse" id="bs-nav-demo">

    <ul class="nav navbar-nav">
      <li><a href="home_page.php">Accueil</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
        <ul class="dropdown-menu">
<?php
                
             
                
               $categorie = $bdd->query('SELECT * from categorie ');
               while($donnees = $categorie->fetch()){
                   ?>
               <li><?php echo "<a href='categorie_page.php?id_categorie=".$donnees["id_categorie"]."'>".$donnees["nom_categorie"]."</a>";?>
                   </a>
                </li>
                    
                </option>
                <?php 
               } 
                
                ?>
          
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <?php 
              if(!empty($_SESSION)){
              ?>
              <li>
              <a><?php echo 'Salut '.$_SESSION['prenom'];   ?></a>
            </li>
            <li>
              <a href="deco.php">Deconnexion</a>
            </li>
              <?php
              }elseif(empty($_SESSION)){ ?>
           <li>
              <a href="#overlay1">Identifiez-vous</a>
            </li>
             <?php } ?>
    



      <li><a href="panier.php"><i class="fas fa-cart-arrow-down"></i> Panier</a></li>
    </ul>

  </div>
</nav>

<!-- Fin Top nav -->

<!-- Overlay -->

<div id="overlay1">
  <div class="popup_block">
    <a class="close" href="#noWhere"><img src="pictures/bouton-close.png" alt="Fermer" title="Fermer la fenêtre" class="btn_close"></a>
    <h2>MON COMPTE</h2>
      <div class="compte">
        <div class="row">

          <div class="col-sm-6 bordure">
            <p>Vous avez déjà un Compte?</p>
           <!--  Formulaire de connection -->
              <form id="log" action="requete_connexion.php" method ="POST" name="log" novalidate autocomplete="off">
                <div class="form-group">
                    <input class="form-control input-xs" type="text" placeholder="Adresse Mail" name="adresse_mail" required>
                </div>
                <div class="form-group">
                    <input class="form-control input-xs" type="password" placeholder="Mot de passe" name="mot_de_passe" ng-model ="vm.password" minlength="4" required>
                </div>
                <button name="log" type="submit" class="btn btn-primary btn-lg" ng-disabled="login.$invalid" id="con">Se Connecter</button>
              </form>
            <!-- Fin formulaire -->
          </div>  
          <div class="col-sm-6">
            <p>Pas encore Client?</p>
            <a href="inscription.php"><button type="button" class="btn btn-primary btn-lg" id="ins">Inscrivez-vous</button></a>
          </div>

        </div>
      </div>
    </div>
  </div>