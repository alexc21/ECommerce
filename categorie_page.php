<?php
include("includes/header.php");
?>


<link rel="stylesheet" type="text/css" href="css/categorie_page.css">



<body>
<!-- NAVBAR -->
<?php
include("includes/top_nav.php");
?>
<!-- fin NAVBAR -->
  
  
<div class="container-fluid">
    
<div class="row">
    <div class="col-md-12">
        
        <!-- bandeau image -->

<?php
$getid = htmlspecialchars($_GET['id_categorie']);
   $requser = $bdd->prepare('SELECT * FROM categorie WHERE id_categorie = ?');
   $requser->execute(array($getid));
   $donnees = $requser->fetch();

?>
    <img class="img-responsive" src="pictures/<?php echo $donnees['header_categorie']; ?>"/>

        <!-- fin bandeau image-->
        
        <!-- description catégorie -->
        <div class="sstitre">
                   <br><br><br>
        		<p>Vous trouverez ici tous ce dont vous aurez besoin pour des deplacements rapide mais toujours dans de bonnes conditions! </p>
                </div>
        <!-- fin description-->
    </div>
    </div>
    <div class="row">
<!-- nav bar gche -->

        <div class="col-md-2 ">
          <div class="nav-gche">
          <h3 id="titre"> CATEGORIES</h3>
          <li>
            <ul>Accessoires</ul>
            <ul>Dans les transports</ul>
            <ul>Sommeil</ul>
            <ul>Sac et Trolleys</ul>
          </li>
         
          </div>
        </div>
<!-- fin .col-md-2 -->
          
        
    

        	
<div class="col-md-10">
        	<div class="row">
<!-- Articles -->
                <?php
$messages = $bdd->query('SELECT * FROM article INNER JOIN categorie ON categorie.id_categorie = article.id_categorie WHERE article.id_categorie = '.$_GET['id_categorie'].' ');
                  
                  while($donnees = $messages->fetch()){
                  ?>

      <div class="col-lg-4 col-sm-6">
        <a href="fiche_produit.php?id_article="  class="thumbnail">
          <img src="photos/<?php echo $donnees['photo']; ?>" >
           <h5><?php echo $donnees['nom_article']; ?></h5>
          <h4><?php echo $donnees['prix']; ?></h4>
        </a>
      </div>
<?php } ?>
      
     <!-- fin Articles -->
                
 </div>
    </div>


        	</div>
    
    </div>


<?php
include("includes/footer.php");
?>