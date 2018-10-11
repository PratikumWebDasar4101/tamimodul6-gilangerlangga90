<?php
require_once('db.php');
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);

if(isset($_POST['proses'])){
 $nim				= $_POST["nim"];
 $nama 				= $_POST["nama"];
 $kelas				= $_POST["kelas"];
 $jenis_kelamin		= $_POST["jenis_kelamin"];
 $hobi				= $_POST["hobi"];
 $fakultas			= $_POST["fakultas"];
 $alamat			= $_POST["alamat"];
 $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', kelas = '$kelas', jenis_kelamin = '$jenis_kelamin', hobi = '$hobi', fakultas = '$fakultas', alamat = '$alamat' WHERE id='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: halamanawal.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

<table>
		<form method="POST">
		<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama" maxlength="35" required value="<?php echo $row['nama'] ?>"> <br> </td>
			</tr>

			<tr>
				<td> NIM </td>
				<td> : </td>
				<td> <input type="text" name="nim" maxlength="10" minlength="10" required value="<?php echo $row['nim'] ?>"> </td>
			</tr>

			<tr>
				<td> Kelas </td>
				<td> : </td>
				<td> 
					<input type="radio" name="kelas" value="41-01"> 41-01 <br>
					<input type="radio" name="kelas" value="41-02"> 41-02 <br>
                    <input type="radio" name="kelas" value="41-03"> 41-03   
				</td>
			</tr>

			<tr>
				<td> Jenis Kelamin </td>
				<td> : </td>
				<td> 
					<input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki <br>
					<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>


			<tr>
				<td> Hobi </td>
				<td> : </td>
				<td>
					<input type="checkbox" name="hobi" value="Membaca"> Membaca <br>
					<input type="checkbox" name="hobi" value="Bersepeda"> Bersepeda <br>
					<input type="checkbox" name="hobi" value="Memancing"> Memancing
				</td>
			</tr>


			<tr>
				<td> Fakultas </td>
				<td> : </td>
				<td>
					<select name="fakultas" required>
						<option value="Fakultas Ilmu Terapan"> Fakultas Ilmu Terapan </option>
						<option value="Fakultas Ekonomi Bisnis"> Fakultas Ekonomi Bisnis </option>
						<option value="Fakultas Industri Kreatif"> Fakultas Industri Kreatif </option>
					</select>
				</td>
			</tr>

			<tr>
				<td> Alamat </td>
				<td> : </td>
				<td> <textarea name="alamat" rows="5" cols="40"> <?php echo $row['alamat'] ?> </textarea></td>
			</tr>

	
			<tr>
				<td> </td>
				<td> </td>
				<td> <input type="submit" name="proses" value="Proses"></td>
			</tr>
		</form>
    </table>
    <?php

    

	