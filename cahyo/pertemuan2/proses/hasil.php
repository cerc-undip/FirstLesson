<?php 

$nama 	= $_POST['nama'];
$nim	= $_POST['nim'];
$alamat	= $_POST['alamat'];
$jk 	= $_POST['JK'];
$angkatan = $_POST['angkatan'];

echo $nama;
echo "<br>";
echo $nim;
echo "<br>";
echo $alamat;
echo "<br>";
echo $jk;
echo "<br>";
echo $angkatan;
$direktori = "proses" . basename($_FILES["gambar"]["name"]);
move_uploaded_file($_FILES["gambar"]["tmp_name"], $direktori);

 ?>
 <img src="<?php echo $direktori; ?>">