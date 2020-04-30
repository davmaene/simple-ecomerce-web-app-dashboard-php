<?php 
    require '_function.php';

        if (isset($_GET['_get_it_']) && isset($_GET['_get_his_cat_']) && isset($_GET['_get_me_'])) {

           $tmp_ = _onAddToMyCard(trim($_GET['_get_me_']),trim($_GET['_get_it_']),trim($_GET['_get_his_cat_']),$bdd);

            switch ($tmp_) {

                case 'error':
                    echo('error');
                    break;
                case 'deja':
                    echo('100000');
                    break;
                case 'added':
                    echo(http_response_code());
                    break;
                default:
                   var_dump($tmp_);
                    break;
            }
        }

?>