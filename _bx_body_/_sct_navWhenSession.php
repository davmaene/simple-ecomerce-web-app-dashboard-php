<?php if(isset($_SESSION['_userId_'])){ ?>

    <!-- start of my session pannel -->
    <div class="cart-hover posZ make_shadow hidden" id="_popUpWheneSession_">
        <div class="container mt-3 pb-3 text-dark">
            <div class="col-lg border-bottom mb-2">
                <h4 class="my-3 text-white">Mon compte</h4>
            </div>
            <ul class="list-group">
                <li class="list-group-item primary-color">
                    <!-- <a href="?page=_account">
                        <span class="fa fa-credit-card"></span>&nbsp;
                        <span>Mon compte</span>
                    </a> -->
                </li>
                <li class="list-group-item primary-color">
                    <a href="?page=_commandes">
                        <span class="fa fa-shopping-cart"></span>&nbsp;
                        <span>Mes commandes</span>
                    </a>
                </li>
                <li class="list-group-item primary-color">
                    <a href="">
                        <span class="fa fa-google-wallet"></span>&nbsp;
                        <span>Mode de paiement</span>
                    </a>
                </li>
                <li class="list-group-item primary-color">
                    <a href="?page=_myShop">
                        <span class="fa fa-search"></span>&nbsp;
                        <span>Recherche</span>
                    </a>
                </li>
                <li class="list-group-item primary-color">
                    <a href="?page=_log_me_out">
                        <span class="fa fa-sign-out"></span>&nbsp;
                        <span>Deconnection</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script src="js/_onShowingSessionPannel.js"></script>
    <!-- end -->

<?php } ?>