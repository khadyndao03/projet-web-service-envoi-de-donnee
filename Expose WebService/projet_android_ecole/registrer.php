<?php

////etape1:connexion a la BDD
$serveurbd= "localhost";
$userbd= "id5114345_dev23";
$userpass="passer11";
$namebd="id5114345_ecole";
//$con = mysqli_connect('localhost', 'id5114345_dev23','passer11', 'id5114345_ecole');

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$classe = $_POST["classe"];

$link = mysqli_connect($serveurbd,$userbd,$userpass,$namebd);

///////etape2:Requete insertion base de donnee
$query = "INSERT INTO `etudiant` (`id`,`prenom`,`nom`,`classe`)
           VALUES (NULL, '$prenom','$nom','$classe')";
//echo($query);

//////etape3: execution requete
mysqli_query($link, $query) or die("ERREUR EXECUTION REQUETE! <br/>". mysqli_error($link));

?>
