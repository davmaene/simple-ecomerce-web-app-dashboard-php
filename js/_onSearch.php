<style>
    .forImage{
        width:80px;
        height:80px;
        background-color:lime;
        display:block;
    }
    .themer{
        /* background:#34495e; */
    }
    .forName{
        /* width: */
    }
</style>
<?php
    require '_function.php';
    if (isset($_GET['word']) && !empty($_GET['word'])) {
       $remu = _onLookingAt(trim($_GET['word']),$bdd); 
?>
    <!-- <div class="select-items"> -->
<?php

    if(count($remu) > 0){

       for ($i=0; $i < count($remu); $i++) { 
           
        $indPrd = $remu[$i];
        //    for($j=0; $j < count($remu[$i]); $j++) { <a href="?page=_product&_idProduct_=<?php echo($indPrd->get_id());?">  
?>
    
    <a  class="themer" href="?page=_product&_prd_get_cat_=<?php echo($indPrd->get_catProd())?>&_idProduct_=<?php echo($indPrd->get_id());?>">      
        <table class="border mb-1 onSearch onSearchBg make_shadow"> 
            <tbody class="p-2">
                <tr>
                    <td class="si-pic">
                        <img src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->get_src()); ?>" alt="img_product">
                    </td>
                    <td class="si-text">
                        <div class="product-selected pl-3">
                            <h6 class="text-secondary"><?php echo($indPrd->get_marque()); ?></h6>
                            <h5><?php echo($indPrd->get_name()); ?></h5>
                            <p>$<?php echo($indPrd->get_price()); ?></p> 
                        </div>
                    </td>
                    <td class="si-text float-right">
                    <div class="product-selected">
                            <h6><span class="badge badge-primary p-1">Disponible</span></h6>
                            <!-- <h6 class="text-primary"></h6> -->
                        </div> 
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="ti-heart"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </a>
   
<?php  
        } 
    
    } else {

?>

    <table class="border mb-1 onSearch onSearchBg make_shadow">
        <tbody class="col-lg col-md col-sm content-center text-center make_shadow">
            <tr>
                <td><span> Aucun resultat trouvé </span></td>
            </tr>
        </tbody>
    </table>
    

<?php


    }

?>

    <!-- </div> -->

<?php
      
    }else{

?>

    <div class="calibreur_">
        <div class="loading" id="loading"> 
            <div class="load-bars">
                <span></span>
            </div>
        </div>
    </div>

<?php } ?>