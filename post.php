<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
	move_uploaded_file($_FILES['userfile']['tmp_name'], 'images/' . $_FILES['userfile']['name']);
	$query = mysqli_query(
		$connect,  
		"INSERT INTO twit (clova, account_image, account_name, account_link, post_image) 
		VALUES(
		'" . $_POST['post_text'] . "', 
		'images/avatar.jpg', 
		'@test76867392', 
		'#', 
		'images/". $_FILES['userfile']['name'] . "'
	)"
	);
	header('Location: http://ann/twitter/index.php');
?>