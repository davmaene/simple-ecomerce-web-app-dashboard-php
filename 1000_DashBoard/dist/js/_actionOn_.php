<?php 
     include('conf_funct.php');

    if (isset($_GET['targeted84']) && !empty($_GET['targeted84'])) {

        if (_onDeleting($_GET['targeted84'],84,$bdd)) {
            echo(http_response_code());
        }
        
    }
    if (isset($_GET['targeted95']) && !empty($_GET['targeted95'])) {

        if (_onDeleting($_GET['targeted95'],95,$bdd)) {
            echo(http_response_code());
        }

    }

?>