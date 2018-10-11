<?php
require_once("db.php");
?>

<table border="1">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
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
                 <td><a href='daftarpostingan.php?id= <?php echo $row['id']?>'> Lihat Postingan </a> 
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