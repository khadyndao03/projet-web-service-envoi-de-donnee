<?php
////etape1:connexion a la BDD

$serveurbd= "localhost";
$userbd= "id5114345_dev23";
$userpass="passer11";
$namebd="id5114345_ecole";

//etape1:connexion a la base
$connexion = mysqli_connect($serveurbd,$userbd,$userpass,$namebd) or die(mysqli_error());

//etape2:requete pour selectionner utilisateurs
$requete = "select * from etudiant ";

//etape3:execution requete
$resultat = mysqli_query($connexion,$requete) or die(mysqli_error());



while($row = $resultat->fetch_assoc())
{
    $data[] = array('nom' => utf8_encode($row['nom']),
                    'prenom'  => $row['prenom'],
                    'classe' => utf8_encode($row['classe']));
}


$myJSON = json_encode($data);

echo $myJSON;


?>