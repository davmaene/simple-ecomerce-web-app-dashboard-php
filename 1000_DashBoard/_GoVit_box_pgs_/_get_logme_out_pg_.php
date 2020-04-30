<?php
    if (isset($_SESSION['_getmeinplzdv_'])) {

        unset($_SESSION['_getmeinplzdv_']);
        unset($_SESSION['_cab_nick_f']);
        unset($_SESSION['_cab_nick_l']);
        unset($_SESSION['_cab_em_']);
        header("location:_GoVit_box_pgs_/_get_login_pg_.php");
    }else{
        header("location:_GoVit_box_pgs_/_get_login_pg_.php");
    }
?>