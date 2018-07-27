<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if(isset($_POST['log'])) {
     $adresse_mail = htmlspecialchars($_POST['adresse_mail']);
   $mdpconnect = $_POST['mot_de_passe'];
    
   if(!empty($adresse_mail) AND !empty($mdpconnect)) {
   
       var_dump($adresse_mail);
       var_dump($mdpconnect);
     
   $query = $bdd->prepare("SELECT * FROM client WHERE adresse_mail=?");
$query->execute([$_POST['adresse_mail']]);

       $row = $query->fetch();
       $fdpdeclasse = password_verify($_POST['mot_de_passe'], $row['mot_de_passe']);
       
           var_dump($row);
           var_dump($fdp);
       
if( $fdpdeclasse == true){
    $_SESSION['id_membre'] = $row;
   
        
         
         $_SESSION['id'] = $row['id_membre'];
         $_SESSION['prenom'] = $row['prenom'];
         $_SESSION['nom'] = $row['nom'];
         $_SESSION['age'] = $row['age'];
         $_SESSION['adresse_postale'] = $row['adresse_postale'];
         $_SESSION['adresse_mail'] = $row['adresse_mail'];
         $_SESSION['id_ville'] = $row['id_ville'];
               
        
    
           header("Location: home_page.php?id=".$_SESSION['id']);
        }else{
            echo 'mauvais mot de passe';
        }
      /* }else{
           echo 'mauvais identifiant';
       } */   
   }else 
   {
     echo "Tous les champs doivent être complétés !";
   }
}



?>