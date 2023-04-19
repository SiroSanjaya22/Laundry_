<?php
include "include/koneksi.php";

$No_Order = $_POST["No_Order"];
$Id_Pakaian = $_POST["Id_Pakaian"];
$Jumlah_Pakaian = $_POST["Jumlah_Pakaian"];
$harga_pakaian = $_POST["harga_pakaian"];
$Total_harga = $Jumlah_Pakaian*$harga_pakaian;

//validasi
if (trim($_POST['Id_Pakaian']) == '') {
	$error[] = '- Jenis Pakaian harus di isi';
}
if (trim($_POST['Jumlah_Pakaian']) == '') {
	$error[] = '- Jumlah Pakaian harus di isi';
}

if (isset($error)) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
	?>
	<script type="text/javascript">setTimeout("location.href='tambahdatatransaksisatuan.php';",2000);</script>
<?php } else {
	$sql = "INSERT INTO `detail_transaksi` (`No_Order`, `Id_Pakaian`, `Jumlah_Pakaian`, `Total_harga`)
			VALUES ('$No_Order', '$Id_Pakaian', '$Jumlah_Pakaian', '$Total_harga')";
			$kueri = mysqli_query($conn, $sql);
	echo '<b>Data Berhasil di simpan...</b><br/>';?>
	<script type="text/javascript">setTimeout("location.href='tambahdatatransaksisatuan.php';",2000);</script>
	<?php
}
