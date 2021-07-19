<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_mobil'];
	
	$id_mobil=$_POST['id_mobil'];
	$type_mobil=$_POST['type_mobil'];
	$warna_mobil=$_POST['warna_mobil'];
	$harga_sewa=$_POST['harga_sewa'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE mobil SET id_mobil='$id_mobil',type_mobil='$type_mobil',warna_mobil='$warna_mobil',harga_sewa='$harga_sewa' 
	WHERE id_mobil=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Mobil</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mobil WHERE id_mobil=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_mobil = $user_data['id_mobil'];
	$type_mobil = $user_data['type_mobil'];
	$warna_mobil = $user_data['warna_mobil'];
	$harga_sewa = $user_data['harga_sewa'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_mobil.php">
		<table border="0">
			<tr> 
				<td>ID Mobil</td>
				<td><input type="text" name="id_mobil" value=<?php echo $id_mobil;?>></td>
			</tr>
			<tr> 
				<td>Type Mobil</td>
				<td><input type="text" name="type_mobil" value=<?php echo $type_mobil;?>></td>
			</tr>
			<tr> 
				<td>Warna</td>
				<td><input type="text" name="warna_mobil" value=<?php echo $warna_mobil;?>></td>
			</tr>
			<tr> 
				<td>Harga Sewa/Hari</td>
				<td><input type="text" name="harga_sewa" value=<?php echo $harga_sewa;?>></td>
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