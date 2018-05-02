<!DOCTYPE html>
<html>
<head>
	<title>Latihan Form</title>
</head>
<body>
	<form action="#" method="post" class="" id="" enctype="multipart/form-data">
		<!-- <input type="text" name="" value="Misal" placeholder="inputan teks">
		<input type="password" name="" placeholder="inputan password">
		<input type="email" name="" placeholder="inputan email">
		<input type="number" name="" min="8" max="10">
		<input type="radio" name="" value="">Fanny
		<input type="checkbox" name="">Hasbi
		<input type="date" name="">
		<input type="week" name="">
		<input type="month" name="">
		<input type="color" name="">
		<input type="file" name="">
		<textarea name="" >oke oke</textarea>
		<select name="">
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
		</select>
		<input type="submit" name="" value="Tombol Submit"> -->
		<center>
			<h1>Login</h1>
			<input type="email" name="email" placeholder="input email"><br><br>
			<input type="password" name="pass" placeholder="input password" required><br><br>
			<input type="submit" name="submit" value="Login">
		</center>
	</form>
</body>
</html>
<?php
// if (isset($_POST['submit'])) {
// 	echo $_POST['email'];
// 	echo "<br>";
// 	echo $_POST['pass'];
// }
// if (isset($_GET['submit'])) {
// 	echo $_GET['email'];
// 	echo "<br>";
// 	echo $_GET['pass'];
// }
echo @$_POST['email'];
echo "<br>";
echo @$_POST['pass'];
?>