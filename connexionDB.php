<?php
  // Définitions de constantes pour la connexion à MySQL
  $hote="sql203.byetcluster.com";
  $login="if0_37483703";
  $mdp="z74wku5uRzKwgg";
  $nomdb="if0_37483703_mission1";

  // Connection au serveur
  try { 
    $connexion=new PDO("mysql:host=$hote;dbname=$nomdb",$login,$mdp);
  } 
  catch ( Exception $e ) {
    die("\n Connexion à localhost impossible: ".$e->getMessage());
  }


// Insertion des données dans la DB
$sql = "INSERT INTO rendezvous (email,nom,prenom,motif_contact,preference_horaire,texte) VALUES ('$email','$nom','$prenom','$motif_contact','$preference_horaire','$texte')";
$stmt= $connexion->prepare($sql);
$stmt->execute();
?>

?>
