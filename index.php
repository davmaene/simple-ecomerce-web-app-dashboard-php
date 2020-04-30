
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les 1000 services </title>
    <link rel="icon" sizes="" href="_bx_assoc_imgs_/vraieheader.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="css/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="css/st.me.css" type="text/css">
    <script src="js/_catchVer.js"></script>
</head>
<?php require_once 'action.php';require 'js/_function.php';?>
<body>
	    <!-- Page Preloder -->
	<div id="preloder">
        <div class="calibreur">
            <div class="loading" id="loading"> 
                <div class="load-bars">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
		<!-- including header -->
		<?php  include("_bx_body_/_sct_header.php"); ?>
		<!-- end of header -->
		<!-- start of real body -->
        <div class="scab" id="scro">
            <?php 
                if(isset($_GET['page'])){
                    include_once('_bx_pages_/'.$page.'.php');
                }
            ?>
        </div>
		<!-- end of real body -->
        <?php  include("_bx_body_/_sct_footer.php"); ?>
	    <!-- Js Plugins -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/_onSubmit.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>