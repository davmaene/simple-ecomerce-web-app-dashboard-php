<?php 

	$pages = scandir('_GoVit_box_pgs_/');

	$default_page = '_get_home_pg_';

	if ($_GET['_trgPage_'] && !empty($_GET['_trgPage_']) && in_array($_GET['_trgPage_'].'.php', $pages)) {

			$page = $_GET['_trgPage_'];

	}else{

		header("location:index.php?_trgPage_=".$default_page);

	} 

?>