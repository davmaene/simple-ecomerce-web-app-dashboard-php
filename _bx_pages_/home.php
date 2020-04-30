<style>
    li.active_h a{
        background: #1a82db;
    }
</style>
<section class="hero-section container-fluid mt-2">
        <div class="hero-items owl-carousel ">
            <div class="single-hero-items set-bg col-lg-12 col-md col-sm col-xm mt-5" data-setbg="_bx_assoc_imgs_/_bx_caroussel_/assurer_blk.jpg">
                <div class="container mrgp">
                    <div class="row">
                        <div class="col-lg-4">
                            
                            <h1>Achetez</h1>
                            <p>Et gagne un revenu mesuel entre <span class="badge bg-gray">80$</span> et <span class="badge bg-gray">1500$</span> apres votre achat
                                avec un mode de paiement sécurisé
                            </p> 
                            <a href="?page=_myShop" class="primary-btn make_shadow">Commander</a>
                        </div>
                    </div>
                    <div class="off-card make_shadow">
                        <h2>Sale<span><i class="fa fa-check"></i></span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg col-lg-12 col-md col-sm col-xm" data-setbg="_bx_assoc_imgs_/_bx_caroussel_/assurer_wht.jpg">
                <div class="container bg mrgp">
                    <div class="row">
                        <div class="col-lg-4">
                            
                            <h1>Louez</h1>
                            <p>Un Bonus de carburant est offert pour les locations journali&egrave;res.
                                Chauffeur gratuit pour les deux premiers jours de locations hebdomadaire.
                            </p>
                            <a href="?page=_myShop" class="primary-btn make_shadow">Faites une location</a>
                        </div>
                    </div>
                    <div class="off-card make_shadow">
                        <h2>Lease<span><i class="fa fa-check"></i></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Banner Section Begin -->
<section class="bg-personalize">
    <!-- <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
            
            <div class="col-lg-4">
                <div class="position-relative mb-2 bg-gray make_shadow single-banner">
                    <div class="ribbon-wrapper">
                        <div class="ribbon bg-primary">
                            A vendre
                        </div>
                    </div>
                    <div class="inner-text">
                    <a href="?page=_listingSale"><h4 class="make_shadow">A Vendre</h4></a>
                    </div>
                    <img src="_bx_assoc_imgs_/_bx_banners_/1000_a.jpg" alt=""> 
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="position-relative mb-2 bg-gray make_shadow single-banner">
                    <div class="ribbon-wrapper">
                        <div class="ribbon bg-warning">
                            A louer
                        </div>
                    </div>
                    <div class="inner-text">
                        <a href="?page=_listingLease"><h4 class="make_shadow">A Louer</h4></a>
                    </div>
                    <img src="_bx_assoc_imgs_/_bx_banners_/1000_c.jpg" alt=""> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="position-relative mb-2 bg-gray make_shadow single-banner">
                    <div class="ribbon-wrapper">
                        <div class="ribbon bg-warning">
                            A louer
                        </div>
                    </div>
                    <div class="inner-text">
                        <a href="?page=_listingLease"><h4 class="make_shadow">A Louer</h4></a>
                    </div>
                    <img src="_bx_assoc_imgs_/_bx_banners_/1000_b.jpg" alt=""> 
                </div>
            </div>
            </div>
        </div>
    </div> -->
        <!-- Man Banner Section Begin -->
    <!-- <section class="man-banner spad bg-sd"> -->
    <div class="container-fluid">
        <div class="col-lg order-1 order-lg-2">
            <div class="product-show-option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="select-option p-3">
                            <h2>Ajouté recement <span class="badge badge-primary">New</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-right">
                        <!-- <p> 01- 09 sur 36 </p> -->
                    </div>
                </div>
            </div>
            <div class="product-list">
                <div class="row" id="product_listing">
                    <?php  
                        // $indPrd = new Product();
                        $srt = 9; $pr = _onLoadProduct_($srt,$bdd); if($pr != null) { 
                        for ($i = 0; $i < count($pr); $i++) { 

                            $indPrd = $pr[$i];
                                // $castedProduct = _convertToProduct($indPrd);// echo($indPrd->get_id());
                    ?>  
                <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->get_catProd())?>&_idProduct_=<?php echo($indPrd->get_id());?>" class="">
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic make_shadow">
                                <img src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->get_src()); ?>" alt="img_product">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view">
                                        <a href="?page=_product&_idProduct_=<?php echo($indPrd->get_id());?>">+ Détail car</a>
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
                                    <!-- <span>$21000.00</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                        
                    <?php } } ?>
                </div>
            </div>
            <div class="loading-more">
                <i class="icon_loading"></i>
                <a href="?page=_myShop">
                    Afficher plus
                </a>
            </div>
        </div>
    </div>
</section>
    <!-- Man Banner Section End -->

   <div class="container-fluid">
        <!-- Banner Section End -->
    <div class="benefit-items mb-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Un achat libre</h6>
                        <p>Achat en anonyma</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-2.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Guarantit accord&eacute;</h6>
                        <p>En cas de non satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Paiement sécurisé</h6>
                        <p>Paiement 100% sécurisé</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
   </div>
</section>