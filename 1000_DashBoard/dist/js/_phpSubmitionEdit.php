<?php

    // header('Content-type: text/xml');
    include('conf_funct.php');
    // var_dump($_FILES);
    $error_message = [];
    $arrayFile = [];
// adding admin in database
if (isset($_POST['fstName'])) {
    _insertnewAdmin(
        trim($_POST['fstName']),
        trim($_POST['lstName']),
        trim($_POST['emailfrom']),
        trim($_POST['phonenumber']),
        trim($_POST['password_1']),
        $bdd);
}
// adding new product in database
if (isset($_POST['exname'])) {
    if (!empty($_FILES['exfaceimg']['name']) && !empty($_POST['mrq'])) {
        foreach ($_FILES as $file) {
            if ($file['error'] == UPLOAD_ERR_NO_FILE || $file['error'] == 4) {
                continue;
            }
            $destination_dir = '../../../_bx_assoc_imgs_/_bx_assoc_imgs_'.$file['name'];
            $tmp_dest_dir = $file['tmp_name'];

            if (move_uploaded_file($tmp_dest_dir,$destination_dir)) {
            array_push($arrayFile,$file['name']);
            }
        }
        switch (trim($_POST['mrq'])) {
            
            case '_lease_':
                $nameToDB = $_FILES['exfaceimg']['name'];
        // pour les produit en location
        // la fonction qui ajoute le produit maintenant
                if (_insertNewProductForLease_edt(
                    trim($_POST['exname']),
                    trim($_POST['exmarque']),
                    trim($nameToDB),
                    trim($_POST['exdesc']),
                    trim($_POST['exprice']),
                    trim($_POST['excolor']),
                    $arrayFile,
                    $bdd)) {
                    echo(http_response_code());
                }
            break;
            
            case '_sales_':
        // pour les produits en vente
                $nameToDB = $_FILES['exfaceimg']['name'];
        // fuunction 
                if (_insertNewProductForSale_edt(
                    trim($_POST['exname']),
                    trim($_POST['exmarque']),
                    trim($nameToDB),
                    trim($_POST['exdesc']),
                    trim($_POST['exprice']),
                    trim($_POST['excolor']),
                    $arrayFile,
                    $bdd)) {
                    echo(http_response_code());
                }
            break;
            default:
               echo('nothing to do');
                break;

        }
    }
    // var_dump($file);
    // var_dump($arrayFile);
    // var_dump($_FILES['exfaceimg']['name']); 
}
    // hypothese que ce ficher ne va jamais et jamai manque dans le formulaire

?>