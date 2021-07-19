<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_trs'];
	
	$id_trs=$_POST['id_trs'];
	$id_mobil=$_POST['id_mobil'];
	$id_penyewa=$_POST['id_penyewa'];
	$lama_sewa=$_POST['lama_sewa'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE transaksi SET id_trs='$id_trs',id_mobil='$id_mobil',id_penyewa='$id_penyewa',lama_sewa='$lama_sewa' 
	WHERE id_trs=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Transaksi</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_trs=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_trs = $user_data['id_trs'];
	$id_mobil = $user_data['id_mobil'];
	$id_penyewa = $user_data['id_penyewa'];
	$lama_sewa = $user_data['lama_sewa'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_transaksi.php">
		<table border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_trs" value=<?php echo $id_trs;?>></td>
			</tr>
			<tr> 
				<td>ID Mobil</td>
				<td><input type="text" name="id_mobil" value=<?php echo $id_mobil;?>></td>
			</tr>
			<tr> 
				<td>ID Penyewa</td>
				<td><input type="text" name="id_penyewa" value=<?php echo $id_penyewa;?>></td>
			</tr>
			<tr> 
				<td>Lama Sewa</td>
				<td><input type="text" name="lama_sewa" value=<?php echo $lama_sewa;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>