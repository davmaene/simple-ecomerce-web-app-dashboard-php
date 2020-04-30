<?php 

	$pages = scandir('_bx_pages_/');

	$default_page = 'home';

	if ($_GET['page'] && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)) {
		if (isset($_GET['_dvd_get_1000d_'])) {
			header("location:1000_DashBoard/");
		}else{
			$page = $_GET['page'];
		}

	}else{

		header("location:index.php?page=".$default_page);
	} 

?>