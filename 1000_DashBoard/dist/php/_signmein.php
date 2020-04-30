<?php 
include('../dist/js/conf_funct.php');
if (isset($_POST['cab_email'])) {
    if (!empty($_POST['cab_email']) && !empty($_POST['cab_pwd'])) {
        $cogs = _connectAdministrator(trim($_POST['cab_email']),trim($_POST['cab_pwd']),$bdd);
        if ($cogs == true) {
            header("location:../index.php?_trgPage_=_get_home_pg_");
        }else{
            echo('
            <span class="text-danger"><span class="fa fa-exclamation-triangle"></span>&nbsp;Username or password incorrect</span>
            '); 
        }
    }else{
        echo('
            <span class="text-danger"><span class="fa fa-exclamation-triangle"></span>&nbsp;please fill text field</span>
            ');
    }
}

?>