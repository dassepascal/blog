<?php require('inc_connexion.php');?> 

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>blog</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    
    <h1>Mon super blog !</h1>
   <p>Derniers billets du blog: </p>
   <?php 
   // on recupere les 5 derniers billets 
   //requete
   $reponse = $bdd->query('SELECT id, titre,contenu,date_creation FROM billets ORDER BY ID DESC LIMIT 0,5 ');
   while($donnees = $reponse->fetch()){
       $id = $donnees['id'];
       $titre = $donnees['titre'];
      

       $contenu = $donnees['contenu'];
       
       $date_creation = $donnees['date_creation'];
       ?>
       <div class="news" >

           <h3><?php echo'' . $titre .' le '.$date_creation. '' ?></h3>
           <p><?php echo '' .$contenu.''?><br />
           <a href="commentaires.php?id=<?php echo $id ?>">Commentaires</a></p>
       </div>          
       <?php  } ?>
   
</body>
</html>