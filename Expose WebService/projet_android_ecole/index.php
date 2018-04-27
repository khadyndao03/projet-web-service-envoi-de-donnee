<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>projet android ecole</title>
</head>
<body>
	<form action="recup.php" method="post" >
		<fieldset>
		
		<legend>DONNEES</legend>
		<label for="">PRENOM:</label>
		<input type="text" name="prenom" >
		<br>
		<br>
		<label for="">NOM:</label>
		<input type="text" name="nom" >
		<br>
		<br>
		<!-- <label for="">DATE NAISSANCE:</label>
		<input type="date" name="dateNaiss" pattern="^(\d{4}-\d{2}-\{2}">
		<br>
		<br> -->
		<!-- <label for="ln">LIEU NAISSANCE:</label>
		<input type="text" name="lieuNaiss" id="ln">
		<br>
		<br> -->
		<label for="">CLASSE:</label>
		<input type="text" name="classe" >
		<br>
		<br>

		<br>
		<!-- <label for="">Image profil</label>
		<input type="file" name="imageprofil">
		<br>
		<br> -->
	<center>
		<input type="submit" value="ENVOYER">
		<input type="reset" value="EFFACER">
	</center>

</body>
</html>