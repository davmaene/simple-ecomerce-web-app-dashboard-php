<?php

     if (isset($_SESSION['_userId_'])) { 

        if(isset($_GET['_getYou_this_']) && isset($_GET['_dvd_me_']) && isset($_GET['_dvd_got_cat_'])){

            if (is_numeric($_GET['_getYou_this_']) && is_numeric($_GET['_dvd_got_cat_'])) {
        
?>

<!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                    <a href="?page=_myShop"> Véhicules</a>
                    <a href="?page=_account"> mon compte</a>
                    <span>Validation commande</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Breadcrumb Form Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6" style="overflow:hidden;">
                        <div class="container">
                            <div class="blog-details-inner">
                                <div class="blog-detail-title">
                                    <h2>Information concernant le mode de paiement.</h2>
                                    <p>Les milleservices <span>- 2 mars, 2020</span></p>
                                </div>
                                <div class="blog-detail-desc">
                                    <p>
                                        pour ce qui concerne le mode de paiement Nous proposons à nos Clients
                                        Un mode de paiement le plus sur et sécurisé; Le paiement de nos services se fait directement dans les installations de
                                        l'agence <span class="badge badge-danger">Note</span> <br> En appyant sur 
                                        <span class="btn btn-default disabled">procéder</span> la réservation se fait automatiquement, Et pour la confirmation de 
                                        de cette requête Nous vous prions de passer au sein de notre agence <br>
                                        Pour plus d'informations :
                                    </p>
                                </div>
                                <div class="blog-quote">
                                            <p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 974 228 949</span></p>
                                            <p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 815 864 596</span></p>
                                            <p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 974 739 246</span></p>
                                            <p><b class="badge badge-primary"><span class="fa fa-envelope"></span> mcinegena@lesmilleservices.com</b> <br><span>- les milleservices</span></p>
                                            <p>" en voiture, on assure. "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 

                        $prd_info = _onLoadProdctInformation(trim($_GET['_getYou_this_']),trim($_GET['_dvd_got_cat_']),$bdd);
                            
                            if ($prd_info != null) {

                    ?>
                    <span class="hdn" id="id_me"><?php echo($_SESSION['_userId_'])?></span>
                    <span class="hdn" id="id_it"><?php echo($prd_info['_prd_id_'])?></span>
                    <span class="hdn" id="id_his"><?php echo($prd_info['_prd_ctgrie_'])?></span>

                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Validation de commande " readonly="true">
                        </div>
                        <div class="place-order">
                            <h4>Votre commande</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Client <span class="badge badge-primary">active</span></li>
                                    <li class="fw-normal">
                                        Nom :
                                        <span><?php echo($_SESSION['_userN_'])?></span>
                                    </li>
                                    <li class="fw-normal">
                                        Post-nom :
                                        <span><?php echo($_SESSION['_userP_'])?></span>
                                    </li>
                                    <li class="fw-normal">
                                        E-mail :
                                        <span><?php echo($_SESSION['_userEm_'])?></span>
                                    </li>
                                    <li class="fw-normal">
                                        Phone :
                                        <span><?php echo($_SESSION['_userPh_'])?></span>
                                    </li>
                                    <li>Commande <span class="badge badge-success">( courante )</span></li>
                                
                                    <li class="fw-normal">
                                        Type :
                                        <span class="text-primary"><?php echo($prd_info['_prd_name_'])?></span>
                                        <span class="text-secondary pr-3"><?php echo($prd_info['_prd_marque_'])?></span>
                                    </li>
                                    <li class="fw-normal">
                                        Prix :
                                        <span>$ <?php echo($prd_info['_prd_price_'])?></span>
                                    </li>
                                
                                </ul>
                                <div class="order-btn">
                                <div class="alert alert-success hdn" id="wnss">
                                    <span>Votre démande a été envoyé avec succes</span>
                                </div>
                                <div class="alert alert-danger hdn" id="wnsss">
                                    <span class="fa fa-warning"></span>
                                    <span>Vous ne pouvez pas commander un meme produit 2 fois</span>
                                </div>
                                    <button 
                                        type="button" class="site-btn place-btn" id="_btn_proced_">
                                        <span class="spinner-border hdn emG" id="_onconfirm_"></span>
                                        PROCEDER
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                                <script>
                                
                                    (function(){
                                         var anm = document.getElementById('_onconfirm_');
                                         var wnss = document.getElementById('wnss').style;
                                         var wnsss = document.getElementById('wnsss').style;
                                        document.getElementById('_btn_proced_').onclick = function(){
                                            anm.style.display = 'inline-block';
                                            var me = document.getElementById('id_me').innerHTML;
                                            var it = document.getElementById('id_it').innerHTML;
                                            var is = document.getElementById('id_his').innerHTML;
                                           
                                            var xhr = new XMLHttpRequest();
                                            xhr.open('GET', 'js/_onAddToMyOwnCard.php?_get_it_='+it+'&_get_his_cat_='+is+'&_get_me_='+me);
                                            xhr.onreadystatechange = function() {
                                                if (xhr.readyState == 4 && xhr.status == 200) {
                                                  if (xhr.response.indexOf(xhr.status) != -1) {
                                                        anm.style.display = 'none';
                                                        wnss.display = 'block';
                                                    setTimeout(function() {
                                                       window.location.href = "?page=_commandes";
                                                    }, 1500); 
                                                    
                                                  }if(xhr.response.indexOf(100000) != -1){
                                                        anm.style.display = 'none';
                                                        wnsss.display = 'block';
                                                  }else{
                                                    //   alert(xhr.response);
                                                  }
                                                }
                                            };
                                            xhr.send(null);
                                        };
                                    })();
                                
                                </script>
                    <?php   
                            }else{ 
                    ?>
                        <div class="container col-lg-6 p-5">
                            <div class="alert alert-warning col-lg text-center">
                                <div class="container">
                                    <span class="fa fa-warning"></span>
                                    <span>Une erreure s'est produite; difficile de traiter votre requete </span>
                                    <span class="pl-5"><a href="?page=_myShop" class="btn btn-primary">Try again</a></span>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                    ?>
                </div>
            </form>
        </div>
    </section>

<?php       
            }
            
         }else{
?>
    <div class="container col-lg-8 p-5">
        <div class="alert alert-warning col-lg">
            <div class="container">
                <span class="fa fa-warning"></span>
                <span>Une erreure s'est produite; difficile de traiter votre requete </span>
                <span class="pl-5"><a href="?page=_myShop" class="btn btn-primary">Try again</a></span>
            </div>
        </div>
    </div>
<?php

         }

    }else{  header("location:?page=_signIn&_tm_out_=true");} 
?>
