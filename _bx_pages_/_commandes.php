<?php

if(isset($_SESSION['_userId_'])){

?>
<style>
    td img{
        width:120px;
    }
</style>
 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=">Véhicules</a>
                        <span>Mes commandes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Nom du produit</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Categorie</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                                $mesC = _onLoadMesCommandes($bdd);
                                 foreach ($mesC as $cmmd) {
                                // var_dump($mesC);
                            ?>
                                <tr class="border-bottom">
                                    <td class="cart-pic first-row"><img src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($cmmd->get_src()) ?>" alt="commande"></td>
                                    <td class="cart-title first-row">
                                        <h5>
                                            <span class="badge badge-primary text-uppercase"><?php echo($cmmd->get_marq()); ?></span> 
                                            <?php echo($cmmd->get_name()); ?>
                                        </h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo($cmmd->get_prix()); ?></td>
                                    <td class="p-price first-row"><?php echo($cmmd->get_date()); ?></td>
                                    <td class="total-price first-row">
                                        <span class="badge badge-warning"><?php echo($cmmd->get_categ()); ?></span>
                                    </td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>

                            <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$000.0</span></li>
                                    <li class="cart-total">Total <span>$000.0</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">EVALUER ENCORE MON COMPTE</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
<?php


    }else{header('location:?page=home');}


?>