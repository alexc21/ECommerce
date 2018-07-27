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
    <img class="img-responsive" src="pictures/cataffaire.png"style="width:100%"/>
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
         
          </div>
        </div>
<!-- fin .col-md-2 -->
          
        
    

        	
<div class="col-md-10">
        	<div class="row">
<!-- Articles -->
      <div class="col-lg-4 col-sm-6">
        <a href="fiche_produit.php" class="thumbnail">
          <img src="pictures/affaire.jpg" >
        </a>
      </div>
   
  
      <div class="col-lg-4 col-sm-6">
        <a href="" class="thumbnail">
          <img src="pictures/famille.jpg" >
        </a>
      </div>
    
    
      <div class="col-lg-4 col-sm-6">
        <a href="" class="thumbnail">
          <img src="pictures/animaux.jpg" >
        </a>
      </div>

      <div class="col-lg-4 col-sm-6">
        <a href="" class="thumbnail">
          <img src="pictures/aventure.jpg" >
        </a>
      </div>

      <div class="col-lg-4 col-sm-6">
        <a href="" class="thumbnail">
          <img src="pictures/camping.jpg" >
        </a>
      </div>

      <div class="col-lg-4 col-sm-6">
        <a href="" class="thumbnail">
          <img src="pictures/indispensable.jpg" >
        </a>
      </div>
     <!-- fin Articles -->
                
 </div>
    </div>


        	</div>
    
    </div>


<?php
include("includes/footer.php");
?>