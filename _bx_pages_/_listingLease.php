<style>
    li.active_l a{
        background: #1a82db;
    }
</style>    
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=_myShop"> Véhicules</a>
                        <span>Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="?page=_myShop">Toutes categories</a></li>
                            <li><a href="?page=_listingLease">Location</a></li>
                            <li><a href="?page=_listingSale">Achat</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marques</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Toyota
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Mercedes Benz
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Prix</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filtre</a>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Couleur</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Noire</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Bleu</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Jaune</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Rouge</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Vert</label>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Mesures | Taille</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="filter-widget">
                        <h4 class="fw-title">Suggestions</h4>
                        <div class="fw-tags">
                            <!-- <a href="#">Towel</a>
                            <a href="#">Chaussures</a>
                            <a href="#">Vestes</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Chapeau homme</a>
                            <a href="#">Backpack</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Triage par défaut</option>
                                    </select>
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
                                $srt = 9; $pr = _onLoadProductOnLease($srt,$bdd); if($pr != null) { 
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
                        <a href="#">
                            Afficher plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>