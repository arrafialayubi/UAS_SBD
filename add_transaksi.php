<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Transaksi</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_transaksi.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_trs"></td>
			</tr>
			<tr> 
				<td>ID Mobil</td>
				<td><input type="text" name="id_mobil"></td>
			</tr>
			<tr> 
				<td>ID Penyewa</td>
				<td><input type="text" name="id_penyewa"></td>
			</tr>
            <tr> 
				<td>Lama Sewa</td>
				<td><input type="text" name="lama_sewa"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_trs = $_POST['id_trs'];
		$id_mobil = $_POST['id_mobil'];
		$id_penyewa = $_POST['id_penyewa'];
		$lama_sewa = $_POST['lama_sewa'];
		
		include("config.php");
				
		$result = mysqli_query($conn, "INSERT INTO transaksi(id_trs,id_mobil,id_penyewa,lama_sewa) 
        VALUES('$id_trs','$id_mobil','$id_penyewa','$lama_sewa')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>