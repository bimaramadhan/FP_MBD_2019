<?php
	
	session_start();

	include_once("function/helper.php");
	include_once("function/connection.php");

	//echo "hey weebs, weebshop here";
	//echo BASE_URL;
	
	//$tes = "Nilai Tes";
	//echo $tes;
	//echo $_GET['page'];
	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	//echo $page;

	//kategori_id

	//echo $_SESSION['user_id'];
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	//$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false; <-- diganti sessionnya jadi level

	$nama = isset($_SESSION['level']) ? $_SESSION['level'] : false;

	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;

	//direct(BASE_URL."index.php?page=login");

	//header('Location: http://localhost/printing/index.php?page=login');
	//die();
?>

<!DOCTYPE html>

<html>

	<head>
		<title>printing</title>

		<!-- CSS REFF START -->
		<link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
	</head>

	<body>

	<!--TEST -->

	<div id="container">
		<div id="header"> <!-- HEADER PART START -->	 
			<a href="<?php echo BASE_URL."index.php"; ?>">
				<img src="<?php echo BASE_URL."images/logo.png"; ?>" />
			</a> 
		
		<div id="menu"> <!-- IS MENU PART START -->
			<div id="user"> <!-- IS USER PART START -->
				<?php 
					if($user_id){

						echo "Hewwo mamang, <b>$nama</b>,
							  <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My profile</a>
							  <a href='".BASE_URL."logout.php'>Keluar</a>";
					}
					else{
						echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
						  	  <a href='".BASE_URL."index.php?page=register'>Register</a>";
					}
				
				?>
				
			</div>

			<!-- CART IMAGE -->
			<a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id = "button-keranjang">
				<img src="<?php echo BASE_URL."images/cart.png"; ?>" />
			</a>

			</div>
		</div>

		<!--

			pada bagian index, akan menampilkan sub-bagian sub-bagian yang diakses
			melalui bagian content part, sehingga template dari index.php bisa berlaku
			di bagian2 lain yang mana sebenarnya template luarnya tidak berbeda.

		 -->
		<div id="content"> <!-- CONTENT PART START -->
		<?php
			$filename = "$page.php";
			//echo $filename;
			if(file_exists($filename)){
				include_once($filename);
			}else{
				include_once("main.php");
				//echo "file $filename tidak ada dalam sistem";
			}
		?>
		</div>

		<div id="footer"> <!-- FOOTER PART START -->
			<p>copyright printing online fp mbd</p>
		</div>

	</div>

	</body>


</html>

