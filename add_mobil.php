<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Mobil</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_mobil.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Mobil</td>
				<td><input type="text" name="id_mobil"></td>
			</tr>
			<tr> 
				<td>Type Mobil</td>
				<td><input type="text" name="type_mobil"></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td><input type="text" name="warna_mobil"></td>
			</tr>
            <tr>
				<td>Harga Sewa/Hari</td>
				<td><input type="text" name="harga_sewa"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_mobil = $_POST['id_mobil'];
		$type_mobil = $_POST['type_mobil'];
		$warna_mobil = $_POST['warna_mobil'];
        $harga_sewa = $_POST['harga_sewa'];
		
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO mobil(id_mobil,type_mobil,warna_mobil,harga_sewa) 
		VALUES('$id_mobil','$type_mobil','$warna_mobil','$harga_sewa')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>