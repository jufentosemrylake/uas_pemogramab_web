<?php
require '../function.php';

$id = $_GET["id"];

if(deleteTempat($id) > 0 ){
	echo "
	<script>
		alert('Data berhasil dihapus');
		document.location.href = 'index.php';
	</script>
	";
}else{
	echo "
	<script>
		alert('Data gagal dihapus');
		document.location.href = 'index.php';
	</script>
	";
}
