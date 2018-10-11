<?php
require_once('db.php');
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
?>

<html>
<head> </head>
<body>
<table align="center">
    <tr>
        <td> Nama </td>
        <td> : </td>
        <td> <?php echo $row['nama'] ?> </td>
    </tr>

    <tr>
        <td> NIM </td>
        <td> : </td>
        <td> <?php echo $row['nim'] ?> </td>
    </tr>
</table>

<br> <br>

<table align="center">
    <form method="POST" action="daftarpostingan.php" enctype="multipart/form-data">
    <tr>
        <td align="center" colspan="3"> KOLOM CERITA : </td>
    </tr>

    <tr>
        <td colspan="3"> <textarea name="cerita" rows="20" cols="80"> Silahkan tambahkan cerita anda disini! </textarea> </td>
    </tr>

    <tr>
		<td align="center" colspan="3"> FOTO : </td>
    </tr>

    <tr>
		<td align="center" colspan="3"> <input type="file" name="foto" id="foto"></td>
	</tr> 

    <tr>
        <td align="center" colspan="3"> <input type="submit" name="simpan" value="Simpan"> </td>
    </tr>
    </form>
</table>
</body>
</html>