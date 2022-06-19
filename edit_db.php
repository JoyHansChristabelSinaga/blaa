<?php
$kegiatan=$_GET["kegiatan"];
include("connection.php");
$kegiatan = mysqli_real_escape_string($conn, $_POST['kegiatan']);
$waktu = $_POST["waktu"];
$query = "UPDATE list SET kegiatan = '$kegiatan', waktu = '$waktu'";
mysqli_query($conn, $query);

if($query) {
echo '<script language="javascript">';
echo 'alert("Berhasil diubah")';
echo '</script>';

}

?>