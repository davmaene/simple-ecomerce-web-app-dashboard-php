<?php 
    // including of file container of functions
    
    require '_function.php';

    if(isset($_POST['emForSubs']) && !empty($_POST['emForSubs'])){
        if(onSubscribe(trim($_POST['emForSubs']),$bdd)){
            echo('seccess');
        }
    }
    if(isset($_POST['username'])){
        if(!empty($_POST['username']) && !empty($_POST['pass'])){
            if(onConnectCustomer(trim($_POST['username']),trim($_POST['pass']),$bdd) != null){

                $cab = array(); 
                $cab = onConnectCustomer(trim($_POST['username']),trim($_POST['pass']),$bdd);
                    _getMeIn($cab);
                echo(http_response_code());
            }else{
                echo('D&eacute;sol&eacute; mot de passe ou nom d\'utilisateur incorrect');
            }
        }else{
            echo('D&eacute;sol&eacute; vous devez remplire toutes les cases puis reessayez!');
        }
    }
    if(isset($_POST['cmm_i'])){
        if(!empty($_POST['cmm_i']) && !empty($_POST['cmm_e']) && !empty($_POST['cmm_t'])){
            if(_onLeaveComment(trim($_POST['cmm_i']),trim($_POST['cmm_e']),trim($_POST['cmm_t']),$bdd) === true){
                echo(http_response_code());
            }else{
                echo('error');
            }
        }else{
            echo('les champs ne doivent pas etre vides');
        }
    }
    if (isset($_POST['name1']) && !empty($_POST['name1'])) {

        $me = _onAddNewCustomer_(
            trim($_POST['name1']),
            trim($_POST['name2']),
            trim($_POST['email_']),
            trim($_POST['phonenum']),
            md5(trim($_POST['pass_1'])),
            $bdd
            );
        if ($me) {
            echo(http_response_code());
        }else{
            echo('pas fait je suis desole david');
        }
    }

    ?>