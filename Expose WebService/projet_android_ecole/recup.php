<?php
$recupnom= $_POST['nom'];
$recupprenom = $_POST['prenom'];
$recupclasse = $_POST['classe'];

echo "<pre>";
echo("prenom :" .$recupprenom)  ;
echo "</pre>";

echo "<pre>";
echo ("nom :" .$recupnom )  ;
echo "</pre>";

/*echo "<pre>";
echo ("Date NAISSANCE :" .$recupdatenaissance)  ;
echo "</pre>";

echo "<pre>";
echo ("Lieu NAISSANCE :" .$recuplieunaissance) ;
echo "</pre>";*/

echo "<pre>";
echo ("classe :" .$recupclasse) ;
echo "</pre>";

//INSERTION DS LA BDD/////

//////etape1:connexion a la BDD
$serveurbd= "localhost";
$userbd= "id5114345_dev23";
$userpass="passer11";
$namebd="id5114345_ecole";
$link = mysqli_connect($serveurbd,$userbd,$userpass,$namebd);


///////etape2:insertion base de donnee
$query = "INSERT INTO `etudiant` (`id`,`prenom`,`nom`,`classe`)
           VALUES (NULL, '$recupprenom','$recupnom','$recupclasse')";
//echo($query);

//////etape3: execution requete
mysqli_query($link, $query) or die("ERREUR EXECUTION REQUETE! <br/>". mysqli_error($link));


//INSERTION DS LA BDD//////



?>