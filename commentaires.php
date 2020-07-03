<?php require('inc_connexion.php'); ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css" type="text/css">
    <meta class="utf-8">
    <title>commentaires</title>
</head>






<body>
<div class="news" >

    <h1>Mon super blog !</h1>
    <a href="index.php">Retour à la liste des billets</a>
    <?php
$id =$_GET['id'];

$result = $bdd->query('SELECT titre,contenu,date_creation FROM billets WHERE id ='.$id.'');
while($donnees = $result->fetch()){
   
    $titre = $donnees['titre'];
   

    $contenu = $donnees['contenu'];
    
    $date_creation = $donnees['date_creation'];
    ?>
    

        <h3><?php echo'' . $titre .' le '.$date_creation. '' ?></h3>
        <p><?php echo '' .$contenu.''?><br />
       
            
    <?php  } ?>
    <h2>Commentaires</h2>
<?php
// requete
$result = $bdd->query('SELECT auteur, commentaire,date_commentaire FROM commentaires WHERE id='.$id.' ');
while($donnees = $result->fetch()){
    $auteur=$donnees['auteur'];
    $commentaire =$donnees['commentaire'];
    $date_commentaire=$donnees['date_commentaire'];
    
    echo '' .$auteur. ' le '.$date_commentaire.'<br>';
    echo '<br>';
    echo $commentaire;


}

?>
</div>  
</body>

</html>