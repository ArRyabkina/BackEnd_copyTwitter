<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
</head>
<body class="bg-light">
	<?php 	
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
	 ?>
	
	<!--Navbar-->

	<nav class="navbar navbar-expand-lg navbar-light shadow bg-white">
				<div class="container">
					<div class="collapse navbar-collapse" id="navbarSupportedContent col-4">
					    <ul class="navbar-nav mr-auto">
					        <li class="nav-item mr-3">
					           <img src="images/icons8-home-50.png" width="30" height="30" alt="">
					            <span>Домой</span>
					        </li>
					        <li class="nav-item mr-3">
					           <img src="images/icons8-new-post-50.png" width="30" height="30" alt="">
					            <span>Письмо</span>
					        </li>
					        <li class="nav-item mr-3">
					           <img src="images/icons8-notification-50.png" width="30" height="30" alt="">
					            <span>уведомления</span>
					        </li>
					    </ul>
					    <nav class="navbar navbar-light col-3">
							<a class="navbar-brand" href="#">
							    <img src="images/icons8-twitter-50.png" width="30" height="30" alt="">
							</a>
						</nav>
					    <form class="form-inline my-2 my-lg-0" action="index.php" method="POST">
					        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					        <img src="images/avatar.jpg" alt="" class="rounded-circle mx-3">
					        <button class="btn btn-primary my-2 my-sm-0" type="submit">Поиск</button>
					    </form>
					</div>
				</div>
	</nav>
 
	<!--main-->

	<div class="container mt-3">
		<div class="row">

			<!--left-->

			<div class="col-3">					
				<div class="col-12 px-3 bg-white">
						<div class="row bg-white">
							<img src="images/background.jpg" class="w-100">
						</div>
						<div class="row">
							<div class="col-4">
								<div class="row p-2">
									<img src="images/avatar.jpg" class="rounded-circle">
								</div>
							</div>
							<div class="col-8">
								<div class="row">
									<p class="weight-500 mr-2">
										test
									</p>
									<a href="#">
										@test76867392
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 mt-2 bg-white">
						<h5>
							Актуальные темы для вас
						</h5>
						<?php 
							$query = mysqli_query($connect, 'SELECT * FROM twit_left_table');
							
							for($i=0;$i<$query->num_rows;$i++){
								$logo = $query->fetch_assoc();
						 ?>
						<div>
							<a <?php 
									echo "href='" . $logo['link'] . "'";
							 ?>
							 >
							 	<?php 
							 		echo $logo['text'];
							 	 ?>
							 </a>
						</div>
						<?php 
							} 
						?>
					</div>	
			</div>

			<!--center-->

			<div class="col-6 bg-white ">
				<div class="row bg-blue p-2">
						<div class="col-2s">
							<img src="images/avatar.jpg" alt="" class="rounded-circle">
						</div>
						<div class="col-10">
							<form action="post.php" method="POST"  enctype="multipart/form-data">
								<textarea class="form-control post-input mr-sm-2 border-primary" placeholder="Что нового?" name="post_text"></textarea>
								<div class="col-12">
									<div class="row">
										<div class="col-6">
											<div class="row">
												<div class="col-3">
													<img src="images/placeholder.png">
												</div>
												<div class="col-3">
													<img src="images/plus.png">
												</div>
												<div class="col-3">
												    <input name="userfile" type="file" />
												</div>
											</div>
										</div>
										<div class="col-6 text-right mt-2">
											<button type="submit" class="btn btn-primary">
												Твитнуть
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
				</div>
				<?php 
				if($_POST['search']==NULL){
					$query = mysqli_query($connect, 'SELECT * FROM twit');
				}else {
					$query = mysqli_query($connect, 'SELECT * FROM twit WHERE clova REGEXP "' . $_POST['search'] . '" OR  account_name REGEXP "' . $_POST['search'] . '"');
				}
					
					for($i=0;$i<$query->num_rows;$i++){
				 ?>
				<div class="row mt-3 border-top">
					<?php 
						$logo = $query->fetch_assoc();
					 ?>
					<div class="col-2 mt-2">
						<img 
						<?php 
							echo 'src="' . $logo['account_image'] . '"';
						?>
						class="rounded-circle">
					</div>
					<div class="col-10  mt-2">
						<div class="row">
							<h5 class="ml-3 mr-2">
								<?php
									echo $logo['account_name'];
								?>
							</h5>
							<a href="#">
								<?php
									echo $logo['account_link'];
								?>
							</a>
						</div>
						<div>
							<p>
								<?php
									echo $logo['clova'];
								?>
							</p>
							<div>
								<img 
									<?php 
										echo 'src="' . $logo['post_image'] . '"';
									?>
								 class="w-100">
							</div>
							<div class="row">
								<div class="col-3">
									<img src="images/comment.png" alt="">
								</div>
								<div class="col-3">
									<img src="images/retweet.png" alt="">
								</div>
								<div class="col-3">
									<img src="images/like.png" alt="">
								</div>
								<div class="col-3">
									<img src="images/envelope.png" alt="">
								</div>
						</div>
						<!--
						GET отдает значения через адресную строку:
Название файла (из action) ? (значение из атрибута name) = (значение)
- это у нас объект
POST просто преключает страницу на следующий файл, также передает
						-->
						<form action="delete.php" method="GET">
							<?php echo '<a href="delete.php?index=' . $logo['id'] .'" type="submit" class="btn btn-primary">delete</a>';?> 
						</form>
						</div>
					</div>
				</div>
				<?php 
					}
				?>
			</div>

			<!--right-->

			<div class="col-3 rounded-top">
				<div class="col-12 bg-white">
					<h5>
						Кого читать
					</h5>
					<?php 
						$query = mysqli_query($connect, 'SELECT * FROM twit_right_table');			
						for($i=0;$i<$query->num_rows;$i++){
							$logo = $query->fetch_assoc();
					?>
					<div class="row">
						<div class="col-3"> 
							<img src=
							<?php 
								echo "'" . $logo['img'] ."'";
							 ?>
							 class="rounded-circle w-100">
						</div>
						<div class="col-5">
							<div class="hid">
								<span>
									<?php 
										echo $logo['text_link'];
									 ?>
								</span>
								<a href=
									<?php 
										echo "'" . $logo['text_link'] . "'";
									 ?>
								>
									<?php 
										echo $logo['name'];
									 ?>
								 </a>
							</div>
							<a href=
								<?php 
									echo "'" . $logo['link_btn'] . "'";
								?>
							></a>
							<button type="button" class="rounded btn btn-outline-primary">Primary</button>
						</div>
						<div class="col-2"></div>
						<div class="col-2">
							<button type="button" class="close" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
					<?php 
						}
					 ?>
				</div>
				<div class="col-12 bg-white">
					<span>Twitter</span>
					<span>Twitter</span>
					<span>Twitter</span>

					<span>Twitter</span>
					<span>Twitter</span>

					<span>Twitter</span>
					<span>Twitter</span>
					<span>Twitter</span>
					<span>Twitter</span>
					<span>Twitter</span>

				</div>
			</div>
		</div>
	</div>
</body>
</html>