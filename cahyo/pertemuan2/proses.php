<?php 

$nama 	= $_POST['nama'];
$nim	= $_POST['nim'];
$alamat	= $_POST['alamat'];
$jk 	= $_POST['JK'];
$angkatan = $_POST['angkatan'];
$warna = $_POST['warna'];
echo $nama;
echo "<br>";
echo $nim;
echo "<br>";
echo $alamat;
echo "<br>";
echo $jk;
echo "<br>";
echo $angkatan;

 ?>
 <body style="background-color: <?php echo @$warna; ?>;">
 	
 </body>