<?php 

    if (isset($_SESSION['_userId_'])) {

        if (isset($_GET['_get_it_']) && isset($_GET['_get_his_cat_']) && isset($_GET['_get_me'])) {

           $tmp_ = _onAddToMyCard(trim($_SESSION['_userId_']),trim($_GET['_get_it_']),trim($_GET['_get_his_cat_']),$bdd);

            if ($tmp_ != null) {

                echo(http_response_code());

            }else{

                echo(" pas fait sorry");

            }
        }

    }else{

        header("location:?page=_listing");
    }

?>