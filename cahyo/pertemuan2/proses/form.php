<!DOCTYPE html>
<html>
<head>
	<title>FORM </title>
</head>
<body>
<!-- <form method="post" action="proses.php"> -->
	<form method="post" action="../proses.php" enctype="multipart/form-data">
	<h1>FORM</h1>
	<p>Nama : <input type="text" name="nama"></p>
	<p>NIM	: <input type="text" onkeypress='return event.charCode >= 46 && event.charCode <= 57' name="nim"></p>
	<p>Alamat	: <textarea name="alamat"></textarea></p>
	<p>Jenis Kelamin : 
		<input type="radio" name="JK" value="cowok">Cowok
		<input type="radio" name="JK" value="cewek">Cewek
	</p>
	<p>
		<select name="angkatan">
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
		</select>
	</p>
	<input type="color" name="warna">
	<input type="submit" name="submit">
</form>
</body>
</html>