<?php
include_once '../modelo/conex.php';

if (isset($_POST['eliminar'])) {
	$id = $_POST['id'];
	$elimina = mysqli_query($conectar, "DELETE FROM clientes WHERE idCliente = '$id'");

	if ($elimina) {
		echo "<script> Swal.fire('Datos Eliminados')</script>";
	} else {
		echo "<script> Swal.fire('Error al eliminar los datos seleccionados')</script>";
	}
}
