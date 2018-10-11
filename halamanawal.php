<?php
require_once("db.php");
?>

<table border="1">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
		<th> Kelas </th>
		<th> Jenis Kelamin </th>
		<th> Hobi </th>
		<th> Fakultas </th>
		<th> Alamat </th>
		<th> Aksi </th>
	</thead>

	<body>
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
		?>

				 <tr>
				 <td><?php echo $row["nama"] ?></td>
				 <td><?php echo $row["nim"] ?></td>
				 <td><?php echo $row["kelas"] ?></td>
				 <td><?php echo $row["jenis_kelamin"] ?></td>
				 <td><?php echo $row["hobi"] ?></td>
				 <td><?php echo $row["fakultas"] ?></td>
				 <td><?php echo $row["alamat"] ?></td>
                 <td><a href='editprofile.php?id= <?php echo $row['id']?>'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;
                     <a href='posting.php?id= <?php echo $row['id']?>'> Cerita </a>
				</tr>

				<?php
			}
		}else{
			echo "Tidak ada hasil";
		}
		mysqli_close($conn);
		?>
	</body>
</table>