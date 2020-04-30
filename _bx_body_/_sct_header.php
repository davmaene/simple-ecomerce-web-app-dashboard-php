    <!-- Header Section Begin -->
    <header class="header-section" >
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        mcinegena@lesmilleservices.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +243 992 913 458
                    </div>
                </div>
                <div class="ht-right">
                    <?php if (isset($_SESSION['_userId_'])) { ?>
                        <!-- <div class=""> -->
                            <a href="#" class="login-panel text-center ml-3" id="_pannelSession_">
                                <span class="round-init"><?php echo(get_user_session()); ?></span>
                            </a>
                        <!-- </div> -->
                   <?php } else { ?>
                        <a href="#" class="login-panel fade-a" data-toggle="modal" data-target="#connectUser">
                            <i class="fa fa-user"></i>
                            Connexion
                        </a>
                    <?php } ?>
                    <div class="top-social">
                        <a href="https://www.facebook.com/Les-Mille-Services-406094873225056/" title="nous suivre sur facebook" target="blank"><i class="ti-facebook"></i></a>
                        <a href="#" title="nous suivre sur twitter" target="blank"><i class="ti-twitter-alt"></i></a>
                        <a href="https://www.linkedin.com/company/38093245/admin/" title="nous suivre sur linkedin" target="blank"><i class="ti-linkedin"></i></a>
                        <!-- <a href="#" title="nous suivre sur pinterest" target="blank"><i class="ti-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">          
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="?page=home">
                                <img src="_bx_assoc_imgs_/vraieheader.png" alt="" style="margin-top:-8px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search" id="advancedsrch">
                            <button type="button" class="category-btn">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Véhicule
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                            <div class="input-group">
                                <form action="#" name="advancedSrch" id="_adv_srch_" method="POST">
                                    <input type="text" placeholder="Recherche ?" id="_keySrch_" name="_keySrch_">
                                    <button type="button" id="_btn_adv_srch_"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center col-md-3">
                        <ul class="nav-right">
                            <?php if(isset($_SESSION['_userId_'])){ ?>
                            <li class="heart-icon">
                                <a href="#">
                                    <!-- <i class="fa fa-envelope"></i> -->
                                    <!-- <span>1</span> -->
                                </a>
                            </li>
                          <?php }else{ ?>
                            <li class="heart-icon">&nbsp;</li>
                          <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item"  id="header_">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categories</span>
                        <ul class="depart-hover">
                            <li><a href="?page=_listingSale">Voiture &agrave; vendre</a></li>
                            <li><a href="?page=_listingLease">Voiture &agrave; louer</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active_h"><a href="?page=home">Home</a></li>
                        <!-- <li class="active_sh"><a href="?page=_myShop">Véhicules</a></li> -->
                        <!-- <li><a href="./blog.html">Blog</a></li> -->
                        <li class="active_l"><a href="?page=_listingLease">En Location</a></li>
                        <li class="active_s"><a href="?page=_listingSale">En Vente</a></li>
                        <li class="active_c"><a href="?page=_contact">Contact</a></li>
                        <li class="active_p"><a href="#">Pages</a>
                            <ul class="dropdown">
                                <!-- <li><a href="./shopping-cart.html">Shopping Cart</a></li> -->
                                <!-- <li><a href="?page=_">Checkout</a></li> -->
                                <li><a href="?page=_faqPage">Informations</a></li>
                                <li><a href="?page=_signUp">Créer un compte client</a></li>
                                <li><a href="?page=_signIn">Connexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- popUp connection -->
    <div class="modal fade" id="connectUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <!-- <h4 class="modal-title" id="myModalLabel">Connexion</h4> -->
                    <button type="button" class="close text-right" data-dismiss="modal" aria-hidden="true">
                            &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <div class="login-form">
                        <form action="#" id="formConn">
                            <h2 class="text-left">Connexion</h2>
                            <div class="group-input">
                                <label for="username">Numero de telephone ou E-mail</label>
                                <input type="text" id="username" name="username" placeholder="ex: mail@kbx.domain">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mot de passe</label>
                                <input type="password" id="pass" name="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                    Enregistrer le mot de passe
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">J'ai oublier le mot de passe</a>
                                </div>
                            </div>
                            <div class="switch-login">
                                <a href="?page=_signUp" class="or-login">Ou cre&eacute;r un compte, C'est gratuit</a>
                                <p class="text-danger mt-2 hidden" id="tooltip_p">
                                    <span class="fa fa-warning"></span>
                                    <small id="tooltip"></small>
                                </p>
                            </div> 
                        </form>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="button" class="site-btn login-btn text-white" id="btn_conn">
                        <span class="spinner-border hidden emG" id="btn_conn_anim"></span>
                        <span class="" id="btn_conn_anim_">Connecter</span>
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <!-- end popup connection -->
                        
    <?php include('/_sct_navWhenSession.php'); ?>
    <?php include('/_onSearchingPanel.php'); ?>
    <script src="js/_onConnectingCustomer.js"></script>
<script>
    (function(){
      
        document.getElementById('_keySrch_').onkeyup = function() { // Effectue une requête et récupère les résultats

            if (this.value != '' || this.value != ' ') {
                var mo = document.getElementById('_onSrch_');
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'js/_onSearch.php?word='+ encodeURIComponent(this.value));
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        mo.style.display = 'block';
                        // console.log(xhr.response);
                        // mo.classList.add('show');
                        setTimeout(function(){
                            mo.innerHTML = xhr.response;
                        }, 200);
                    }
                };
                xhr.send(null);
            }else{
                mo.style.display = 'none';
            }
        };
        document.getElementById('_btn_adv_srch_').onclick = function(){
            var keyWord_ = document.getElementById('_keySrch_').value;
            if (keyWord_ != '') {
                window.location.href = '?page=_onSearchingMyCar&get_it='+keyWord_;
            }
        };

    })();
</script>
    