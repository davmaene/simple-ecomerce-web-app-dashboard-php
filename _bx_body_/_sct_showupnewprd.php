<?php 

    $pr = _onLoadNewProduct($bdd);
    
    for ($i = 0; $i < count($pr); $i++) { 

        $indPrd = $pr[$i];

?>
<!-- <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->get_catProd())?>&_idProduct_=<?php echo($indPrd->get_id());?>" class=""> -->
<div class="product-item">
    <div class="pi-pic">
        <img src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->get_src()); ?>" alt="img_product">
        <!-- <div class="sale">Sale</div> -->
        <div class="icon">
            <i class="icon_heart_alt"></i>
        </div>
        <ul>
            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
            <li class="quick-view">
            <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->get_catProd())?>&_idProduct_=<?php echo($indPrd->get_id());?>" class="">+ Détail</a>
            </li>
            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
        </ul>
    </div>
    <div class="pi-text">
        <div class="catagory-name"><?php echo($indPrd->get_marque()); ?></div>
        <a href="#">
            <h5><?php echo($indPrd->get_name()); ?></h5>
        </a>
        <div class="product-price">
            $<?php echo($indPrd->get_price()); ?>
            <!-- <span>$35.00</span> -->
        </div>
    </div>
</div>
<!-- </a> -->
<?php

    }

?>