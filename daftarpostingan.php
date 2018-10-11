<?php
require_once('db.php');
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
?>

<html>
<head> </head>
<body>
<table>
    <tr>
        <td> Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
        <td> : </td>
        <td> <?php echo $row['nama'] ?> </td>
    </tr>

    <tr>
        <td> NIM </td>
        <td> : </td>
        <td> <?php echo $row['nim'] ?> </td>
    </tr>

    <tr>
        <td> Cerita </td>
        <td> : </td>
        <td> 
        <?php
        if(isset($_POST['simpan'])){
            $cerita = $_POST["cerita"];
        }
        $hitung = str_word_count($cerita);
        echo "Jumlah kata yang anda masukan adalah " .$hitung. " kata <br>";
        if($cerita < 30){
            echo "Minimal kata yang dimasukkan adalah 30! <br> <br>";
        }
        echo $cerita; 
         ?> 
         </td>
    </tr>

    <tr>
        <td> Foto </td>
        <td> : </td>
        <td>
        <?php
        $file = $_FILES["foto"];
        $nama_file = $file["name"];
        $nama_tmp =$file['tmp_name'];
        $upload_dir = "upload/";
        move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
        ?> 
        <img width="300" src="upload/<?php echo $nama_file; ?>"> </td>
    </tr>

    <tr>
        <td> <a href="semuaposting.php" style="text-decoration: none">Lihat Semua Postingan</a> </td>
    </tr>
</table>
</body>
</html>