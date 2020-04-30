<style>
    li.active_ .a{
        background: #1a82db;
    }
</style>
  <?php 
    if(isset($_GET['_idProduct_']) && isset($_GET['_prd_get_cat_'])) { 
  ?>
  <?php #var_dump(_onLoadSingleProduct(trim($_GET['_idProduct_']),$bdd)); ?>

  <!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=_myShop">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php echo($_GET['page']); ?> -->
    <!-- Breadcrumb Section Begin -->
    
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="?page=_myShop">Toutes categories</a></li>
                            <li><a href="?page=_listingLease">Location</a></li>
                            <li><a href="?page=_listingSale">Achat</a></li>
                        </ul>
                    </div>
                    <!-- <div class="filter-widget">
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
                        </div>
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
                    <div class="filter-widget">
                        <h4 class="fw-title">Détail</h4>
                        <div class="fw-tags">
                            <!-- <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom p-1 make_shadow">
                                <img class="product-big-img" src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_src_']);?>" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_4']);?>"><img
                                            src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_4']);?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_3']);?>"><img
                                            src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_3']);?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_2']);?>"><img
                                            src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_2']);?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_1']);?>"><img
                                            src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_face_1']);?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span><?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_marque_']);?></span>
                                    <h3><?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_name_']);?></h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p><?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_description_']);?></p>
                                    <h4>$<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_price_']);?></h4>
                                </div>
                                <div class="pd-color">
                                    <h6 class="pt-1">Couleur : </h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <strong class="border mrgt"><?php echo(ucfirst(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_color_']));?></strong>
                                            <!-- <label for="cc-black"></label> -->
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="?page=_getmyownprd&_getYou_this_=<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_id_']);?>&_dvd_me_=<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_price_']);?>&_dvd_got_cat_=<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_ctgrie_']);?>" class="primary-btn pd-cart">
                                        Commander
                                    </a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>:<!-- More Accessories, Wallets & Cases --></li>
                                    <li><span>TAGS</span>: <!--Clothing, T-shirt, Woman --></li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code"><strong>Parteger sur :</strong></div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Commentaires</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <p><?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_description_']);?></p>
                                                <h5>Features</h5>
                                                <p></p>
                                            </div>
                                            <div class="col-lg-5 p-3 border make_shadow">
                                            <img class="product-big-img" src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_src_']);?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Vote des utilisateurs</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(4)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Prix</td>
                                                <td>
                                                    <div class="p-price">$<?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_price_']);?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Categorie</td>
                                                <td>
                                                
                                                <?php if (_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_ctgrie_'] == 95) { ?>
                                                   <div class="cart-add">En Vente</div>
                                                <?php } else if (_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_ctgrie_'] == 84) { ?>
                                                    <div class="cart-add">En Location </div>
                                                <?php }else{  ?>
                                                    <div class="cart-add">Location | Vente</div>
                                                <?php } ?>   
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr> -->
                                            <tr>
                                                <td class="p-catagory">Nombre des portières</td>
                                                <td>
                                                    <div class="cart-add">- </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">marque</td>
                                                <td>
                                                    <div class="p-size"><?php echo(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_marque_']);?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Color</td>
                                                <td>
                                                    <div class="p-size">
                                                        <?php echo(ucfirst(_onLoadSingleProduct(trim($_GET['_idProduct_']),trim($_GET['_prd_get_cat_']),$bdd)['_prd_color_']));?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">lieux</td>
                                                <td>
                                                    <div class="p-code">-</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>(0) Commentaires</h4>
                                        <div class="leave-comment">
                                            <h4>Lesser un commentaire</h4>
                                            <form action="#" class="comment-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages"></textarea>
                                                        <button type="submit" class="site-btn">Commenter</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <!-- <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-2.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Shoes</div>
                            <a href="#">
                                <h5>Guangzhou sweater</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-3.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-4.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Converse Shoes</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Related Products Section End -->
    <?php }else{ header("location:?page=home"); }?>