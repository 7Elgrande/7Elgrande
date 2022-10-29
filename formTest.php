<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="center">

		<form action="test99.php" method="post">
	
	<select name="names">

		<option >Reducteur</option>
		<option>Broyeur</option>
		<option>Vis</option>
		<option>Pompe</option>
		<option>Bande</option>
		<option>Ventilateur</option>
	</select><br>

	<select name="type">
		
		<option>MM</option>
		<option>ME</option>
		<option>MR</option>
		<option>PROCESS</option>
	</select><br>
	<input type="text" name="desc" placeholder="description"><br>
	<input type="text" name="action" placeholder="action"><br>
	<input type="datetime-local" name="date_d"><br>
	<input type="datetime-local" name="date_f"><br>
	<input type="submit" name="sub" value="Ajouter">

</form>

</div>
</body>
</html>