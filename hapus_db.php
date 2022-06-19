<?php
include "connection.php";

$kegiatan = $_GET['kegiatan'];
$query = mysqli_query($conn, "DELETE FROM list WHERE kegiatan = '$kegiatan'");

if($query) {
echo '<script language="javascript">';
echo 'alert("Berhasil dihapus")';
echo '</script>';

}

?>