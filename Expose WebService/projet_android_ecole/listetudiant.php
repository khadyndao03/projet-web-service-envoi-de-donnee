<?php 	
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




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>affichage</title>


<body>
	

	 <table cellpadding="3px" cellspacing="0px" rules="all" style="border:solid 1px black; border-collapse:collapse; background-color:lightgrey; text-align:center;">
	 	<th colspan="9" style="width:100%;"> <h2>Affichage Etudiant</h2></th>
	  
	   <tr>
	   	
	   	  
	      <td>prenom</td>
	      <td>nom</td>
	      <!-- <td>date naissance</td>
	      <td>lieu naissance</td> -->
	      <td>classe</td>
	     
	      
	      
	    </tr>
<?php
//etape4:affichage resultat requete
while ($row=mysqli_fetch_assoc($resultat)) {

?>
<tr>
	<td><?php echo $row['prenom']?></td>
	<td><?php echo $row['nom']?></td>
	<!-- <td><?php echo $row['dateNaiss']?></td>
	<td><?php echo $row['lieuNaiss']?></td> -->
	<td><?php echo $row['classe']?></td>
</tr>
<?php	
	/*echo $row['prenom'];
	echo $row['nom'];
	echo $row['dateNaiss'];
	echo $row['lieuNaiss'];*/
}

?>

			







	             
</table>
</body>
</html>


<?php
mysqli_free_result($resultat);

mysqli_close($connexion);

?>