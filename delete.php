<?php 
		include 'db.php';
	?>
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
	$query = mysqli_query($connect, "DELETE FROM twit WHERE id='". $_GET['index'] . "'");
	header('Location: http://ann/twitter/index.php');
?>