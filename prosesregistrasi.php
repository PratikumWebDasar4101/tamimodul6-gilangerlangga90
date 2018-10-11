<?php
require_once("db.php");
$nim				= $_POST['nim'];
$nama 				= $_POST['nama'];
$kelas				= $_POST['kelas'];
$jenis_kelamin		= $_POST['jenis_kelamin'];
$hobi				= $_POST['hobi'];
$fakultas			= $_POST['fakultas'];
$alamat				= $_POST['alamat'];
$sql = "INSERT INTO mahasiswa (nim, nama, kelas, jenis_kelamin, hobi, fakultas, alamat)
		VALUES ('$nim', '$nama', '$kelas', '$jenis_kelamin', '$hobi', '$fakultas', '$alamat')";
if (mysqli_query($conn, $sql)) {
	echo "Data berhasil disimpan! <br>";
	echo "Silahkan Login";
    echo "<a href='login.html' style='text-decoration: none;'> Disini </a>";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);