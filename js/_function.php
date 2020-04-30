
<?php

      session_start(); //starting my session
      include '/Customer.php';
      include '/Product.php';
      include '/Command.php';
      // global 

          global $bdd;
          $myCustomer = null;
          $product = null;
          global $productArray;
          $productArray = [];
          global $product_mixed;
          $product_mixed = [];

      try 
      {
        $bdd = new PDO('mysql:host=localhost;dbname=_thisismydatabase_','root','');
        if($bdd != null){
// on conneect customer to the database
            function onConnectCustomer($customerN,$customerP,$bdd)
            {
                $req = $bdd->prepare('SELECT * FROM _customer_ WHERE _customer_._cst_mail_ = :cs OR _customer_._cst_phone_ = :cs ');
                $req->execute(["cs"=>$customerN]);
                $req = $req->fetch();

                  if($req['_cst_password_'] === md5($customerP)){
                    global $myCustomer;
                    $myCustomer = new Customer($req['_cst_fst_name_'],$req['_cst_lst_name_'],$req['_cst_mail_'],$req['_cst_phone_']);
                    $cab = $myCustomer;
                    return $cab; 
                  }else{ return null; }
            }
// on subscribe user to newsletter
                    
            function onSubscribe($mailto,$bdd)
            {
                $req = $bdd->prepare('INSERT INTO _news_letter_ (`_cst_mail_`) VALUES (:em)');
                // $req->execute(["em"=>$mailto]);
                if(!$req->execute(["em"=>$mailto])){
                  return false;
                }else{
                  return true;
                }
            }
// function casting and convert product
            function _convertToProduct(Product $pr)
            {
              return $pr->get_name();
            }

// function get me in
            function _getMeIn(Customer $cab)
            {
              if($cab != null){
                $_SESSION['_userId_'] = md5($cab->get_fstName());
                $_SESSION['_userN_'] = $cab->get_fstName();
                $_SESSION['_userP_'] = $cab->get_lastName();
                $_SESSION['_userEm_'] = $cab->get_addMail();
                $_SESSION['_userPh_'] = $cab->get_phoneNum();
                // var_dump($_SESSION);
               }
            }
// function _onLoadProduct
            function _onLoadProduct($flt,$bdd)
            {
              global $product;
              $pre = $bdd->prepare('SELECT * FROM _product_lease_ GROUP BY _product_lease_._prd_id_ DESC'); //GROUP BY _product_lease_._prd_id_ DESC
              $pre->execute();
              $pr_e = $bdd->prepare('SELECT * FROM _product_sales_ GROUP BY _product_sales_._prd_id_ DESC'); //GROUP BY _product_lease_._prd_id_ DESC
              $pr_e->execute();
                  
                  $pre = $pre->fetchAll();
                  $pr_e = $pr_e->fetchAll();
                  $product_mixed = [];$array_shuffle;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                    for ($i=0; $i < count($pr_e) ; $i++) { 
                      $product = new Product($pr_e[$i]['_prd_id_'],
                      $pr_e[$i]['_prd_name_'],
                      $pr_e[$i]['_prd_description_'],
                      $pr_e[$i]['_prd_color_'],
                      $pr_e[$i]['_prd_price_'],
                      $pr_e[$i]['_prd_marque_'],
                      $pr_e[$i]['_prd_src_'],
                      $pr_e[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                  //  $array_shuffle = array_rand($product_mixed,2);
                  //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                  // echo(count($pre));
                  return $product_mixed;
            }
            function _onLoadProduct_($flt,$bdd)
            {
              global $product;
              $pre = $bdd->prepare('SELECT * FROM _product_lease_ GROUP BY _product_lease_._prd_id_ DESC LIMIT 3'); //GROUP BY _product_lease_._prd_id_ DESC
              $pre->execute();
              $pr_e = $bdd->prepare('SELECT * FROM _product_sales_ GROUP BY _product_sales_._prd_id_ DESC LIMIT 3'); //GROUP BY _product_lease_._prd_id_ DESC
              $pr_e->execute();
                  
                  $pre = $pre->fetchAll();
                  $pr_e = $pr_e->fetchAll();
                  $product_mixed = [];$array_shuffle;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                    for ($i=0; $i < count($pr_e) ; $i++) { 
                      $product = new Product($pr_e[$i]['_prd_id_'],
                      $pr_e[$i]['_prd_name_'],
                      $pr_e[$i]['_prd_description_'],
                      $pr_e[$i]['_prd_color_'],
                      $pr_e[$i]['_prd_price_'],
                      $pr_e[$i]['_prd_marque_'],
                      $pr_e[$i]['_prd_src_'],
                      $pr_e[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                  //  $array_shuffle = array_rand($product_mixed,2);
                  //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                  // echo(count($pre));
                  return $product_mixed;
            }
            function _onLoadProductOnSale($flt,$bdd){
              global $product,$productArray;
              $pre = $bdd->prepare('SELECT * FROM _product_sales_  GROUP BY _product_sales_._prd_id_ DESC');
              $pre->execute();
                  
                  $pre = $pre->fetchAll();
                  // global $product;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                    }
                  // echo(count($pre));
                  return $productArray;
            }
            function _onLoadProductOnLease($flt,$bdd){
              global $product,$productArray;
              $pre = $bdd->prepare('SELECT * FROM _product_lease_  GROUP BY _product_lease_._prd_id_ DESC');
              $pre->execute();
                  
                  $pre = $pre->fetchAll();
                  // global $product;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                    }
                  // echo(count($pre));
                  return $productArray;
            }
// function get_user_session
            function get_user_session()
            {
              if(isset($_SESSION['_userId_'])){
                $int_l = substr($_SESSION['_userN_'],0,1);
                $int_r = substr($_SESSION['_userP_'],0,1);
                global $initial;
                      $initial = $int_l.$int_r;
                return $initial;
              }else{return null;}
            }
// on leaving a comment 
            function _onLeaveComment($name,$email,$comments,$bdd)
            {
              $req = $bdd->prepare('INSERT INTO _cst_lve_comment_(`_name_cst_`,`_mail_cst_`,`_comment_cst_`) VALUES (:n,:e,:cm)');
              if(!$req->execute(["n"=>$name,"e"=>$email,"cm"=>$comments])){return false;}else{return true;}
            }
// on logout customer
            function _onLogout()
            {
              if(isset($_SESSION['_userId_']) && $_SESSION['_userId_'] != null){
                unset($_SESSION);
                return true;
              }else{
                return false;
              }
            }
// on load a single product
            function _onLoadSingleProduct($key,$getCat,$bdd){
              if(!empty($key)){
                switch ($getCat) {
                  case 95:
                    $_preq_ = $bdd->prepare('SELECT * FROM _product_sales_ 
                    JOIN _prd_detail_ 
                    ON _product_sales_._prd_id_ = _prd_detail_._id_produit  
                    WHERE _prd_detail_._prd_categorie_ = :sd AND _product_sales_._prd_id_ =:ke LIMIT 1');
                    $_preq_->execute(["sd"=>0,"ke"=>$key]);
                    $_preq_ = $_preq_->fetch();
    
                    return $_preq_;

                    break;
                    case 84:
                      $_preq_ = $bdd->prepare('SELECT * FROM _product_lease_ 
                      JOIN _prd_detail_ 
                      ON _product_lease_._prd_id_ = _prd_detail_._id_produit  
                      WHERE _prd_detail_._prd_categorie_ = :sd AND _product_lease_._prd_id_ =:ke LIMIT 1');
                      $_preq_->execute(["sd"=>1,"ke"=>$key]);
                      $_preq_ = $_preq_->fetch();
      
                      return $_preq_;
  
                      break;
                  
                  default:
                    # code...
                    return null;
                    break;
                }
              }
            }
            function _onLookingAt($keySearch,$bdd){

              global $product;
              $pre = $bdd->prepare("SELECT * FROM _product_lease_ WHERE _prd_name_ LIKE '$keySearch%' GROUP BY _product_lease_._prd_id_ DESC LIMIT 5"); //GROUP BY _product_lease_._prd_id_ DESC
              $pre->execute();
              $pr_e = $bdd->prepare("SELECT * FROM _product_sales_ WHERE _prd_name_ LIKE '$keySearch%' GROUP BY _product_sales_._prd_id_ DESC LIMIT 5"); //GROUP BY _product_lease_._prd_id_ DESC
              $pr_e->execute();
                  
                  $pre = $pre->fetchAll();
                  $pr_e = $pr_e->fetchAll();
                  $product_mixed = [];$array_shuffle;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                    for ($i=0; $i < count($pr_e) ; $i++) { 
                      $product = new Product($pr_e[$i]['_prd_id_'],
                      $pr_e[$i]['_prd_name_'],
                      $pr_e[$i]['_prd_description_'],
                      $pr_e[$i]['_prd_color_'],
                      $pr_e[$i]['_prd_price_'],
                      $pr_e[$i]['_prd_marque_'],
                      $pr_e[$i]['_prd_src_'],
                      $pr_e[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                  //  $array_shuffle = array_rand($product_mixed,2);
                  //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                  // echo(count($pre));
                  return $product_mixed;
            }
            function _onLookingAtAll($keySearch,$bdd){

              global $product;
              $pre = $bdd->prepare("SELECT * FROM _product_lease_ WHERE _prd_name_ LIKE '$keySearch%' GROUP BY _product_lease_._prd_id_ DESC"); //GROUP BY _product_lease_._prd_id_ DESC
              $pre->execute();
              $pr_e = $bdd->prepare("SELECT * FROM _product_sales_ WHERE _prd_name_ LIKE '$keySearch%' GROUP BY _product_sales_._prd_id_ DESC"); //GROUP BY _product_lease_._prd_id_ DESC
              $pr_e->execute();
                  
                  $pre = $pre->fetchAll();
                  $pr_e = $pr_e->fetchAll();
                  $product_mixed = [];$array_shuffle;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product($pre[$i]['_prd_id_'],
                      $pre[$i]['_prd_name_'],
                      $pre[$i]['_prd_description_'],
                      $pre[$i]['_prd_color_'],
                      $pre[$i]['_prd_price_'],
                      $pre[$i]['_prd_marque_'],
                      $pre[$i]['_prd_src_'],
                      $pre[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                    for ($i=0; $i < count($pr_e) ; $i++) { 
                      $product = new Product($pr_e[$i]['_prd_id_'],
                      $pr_e[$i]['_prd_name_'],
                      $pr_e[$i]['_prd_description_'],
                      $pr_e[$i]['_prd_color_'],
                      $pr_e[$i]['_prd_price_'],
                      $pr_e[$i]['_prd_marque_'],
                      $pr_e[$i]['_prd_src_'],
                      $pr_e[$i]['_prd_ctgrie_']
                    );
                      $productArray[$i] = $product;
                      array_push($product_mixed,$product);
                    }
                  //  $array_shuffle = array_rand($product_mixed,2);
                  //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                  // echo(count($pre));
                  return $product_mixed;
            }
          function _onLoadNewProduct($bdd){

            global $product;
            $pre = $bdd->prepare("SELECT * FROM _product_lease_  "); //GROUP BY _product_lease_._prd_id_ DESC
            $pre->execute();
            $pr_e = $bdd->prepare("SELECT * FROM _product_sales_ "); //GROUP BY _product_lease_._prd_id_ DESC
            $pr_e->execute();
                
                $pre = $pre->fetchAll();
                $pr_e = $pr_e->fetchAll();
                $product_mixed = [];$array_shuffle;
                  for ($i=0; $i < count($pre) ; $i++) { 
                    $product = new Product($pre[$i]['_prd_id_'],
                    $pre[$i]['_prd_name_'],
                    $pre[$i]['_prd_description_'],
                    $pre[$i]['_prd_color_'],
                    $pre[$i]['_prd_price_'],
                    $pre[$i]['_prd_marque_'],
                    $pre[$i]['_prd_src_'],
                    $pre[$i]['_prd_ctgrie_']
                  );
                    $productArray[$i] = $product;
                    array_push($product_mixed,$product);
                  }
                  for ($i=0; $i < count($pr_e) ; $i++) { 
                    $product = new Product($pr_e[$i]['_prd_id_'],
                    $pr_e[$i]['_prd_name_'],
                    $pr_e[$i]['_prd_description_'],
                    $pr_e[$i]['_prd_color_'],
                    $pr_e[$i]['_prd_price_'],
                    $pr_e[$i]['_prd_marque_'],
                    $pr_e[$i]['_prd_src_'],
                    $pr_e[$i]['_prd_ctgrie_']
                  );
                    $productArray[$i] = $product;
                    array_push($product_mixed,$product);
                  }
                //  $array_shuffle = array_rand($product_mixed,2);
                //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                // echo(count($pre));
                return $product_mixed;
          } 
          function _onLoadProdctInformation($idProduct,$catme,$bdd){
            switch (trim($catme)) {
              case 95:

                $prereq = $bdd->prepare('SELECT _prd_id_,_prd_name_,_prd_price_,_prd_ctgrie_,_prd_marque_ FROM _product_sales_ WHERE _product_sales_._prd_id_ = :id_tmp LIMIT 1');
                $prereq->execute(["id_tmp"=>$idProduct]);
                $prereq = $prereq->fetch();
                return $prereq;
                break;

              case 84:

                $prereq = $bdd->prepare('SELECT _prd_id_,_prd_name_,_prd_price_,_prd_ctgrie_,_prd_marque_ FROM _product_lease_ WHERE _product_lease_._prd_id_ = :id_tmp LIMIT 1');
                $prereq->execute(["id_tmp"=>$idProduct]);
                $prereq = $prereq->fetch();
                return $prereq;
                break;

              default:
                return null;
                break;
            }
           
          } 
          function _testIfCmmAlredy($u,$pf,$c,$v){
            $p = $v->prepare("SELECT *  FROM _prd_commande_ WHERE _cmmd_id_prd_=:idpr AND _cmmd_id_cstmer_=:cst");
            $p->execute(["idpr"=>$pf,"cst"=>$u]);
            $p = $p->fetch();
            if ($p['_cmmd_ctgrie_']==$c) {
              return true;
            }
          }
          function _onAddToMyCard($me,$it,$his,$bdd){

            // $ps = $p[0];
            if(_testIfCmmAlredy($me,$it,$his,$bdd)){
              return 'deja';
            }else{
              $pret = $bdd->prepare("INSERT INTO _prd_commande_ (`_cmmd_id_prd_`,`_cmmd_ctgrie_`,`_cmmd_id_cstmer_`) 
              VALUES (:idprd,:prdcat,:idCust)");
                if($pret->execute(["idprd"=>$it,"prdcat"=>$his,"idCust"=>$me])){
                return 'added';
                } else{
                return 'error';
                }
            } 
          }
          function _onAddNewCustomer_($name_1,$name_2,$email_,$phone_,$pass,$bdd){
            $rt = $bdd->prepare('INSERT INTO _customer_ (`_cst_fst_name_`,`_cst_lst_name_`,`_cst_mail_`,`_cst_phone_`,`_cst_password_`) 
            VALUES (:na,:lsn,:em,:ph,:pwd)');
            if ($rt->execute(["na"=>$name_1,"lsn"=>$name_2,"em"=>$email_,"ph"=>$phone_,"pwd"=>$pass])) {
              return true;
            }else{
              return false;
            }
          }
          function _onLoadMesCommandes($bdd){
              $ar_commd = [];
            if (isset($_SESSION['_userId_'])) {
              $d_me = trim($_SESSION['_userId_']);
              $rf = $bdd->prepare('SELECT _cmmd_ctgrie_,_cmmd_id_prd_,_cmmd_timestamp_ FROM _prd_commande_ WHERE _cmmd_id_cstmer_ =:sd');
              $rf->execute(["sd"=>$d_me]); 
              $rf = $rf->fetchAll();

              for ($i=0; $i < count($rf) ; $i++) { 

                switch (trim($rf[$i]['_cmmd_ctgrie_'])) {
                  case '84':
                    $lease = $bdd->prepare('SELECT * FROM _product_lease_ WHERE _product_lease_._prd_id_ =:idm AND _product_lease_._prd_ctgrie_ =:ctrg');
                    $lease->execute(["idm"=>$rf[$i]['_cmmd_id_prd_'],"ctrg"=>$rf[$i]['_cmmd_ctgrie_']]);
                    $lease = $lease->fetch();
                      $cmd = new Command($lease['_prd_name_'],$lease['_prd_src_'],$lease['_prd_price_'],'Location',$rf[$i]['_cmmd_timestamp_'],$lease['_prd_marque_']);
                        array_push($ar_commd,$cmd);
                    break;

                  case '95':
                    $lease = $bdd->prepare('SELECT * FROM _product_sales_ WHERE _product_sales_._prd_id_ =:idm AND _product_sales_._prd_ctgrie_ =:ctrg');
                    $lease->execute(["idm"=>$rf[$i]['_cmmd_id_prd_'],"ctrg"=>$rf[$i]['_cmmd_ctgrie_']]);
                    $lease = $lease->fetch();
                      $cmd = new Command($lease['_prd_name_'],$lease['_prd_src_'],$lease['_prd_price_'],'Vente',$rf[$i]['_cmmd_timestamp_'],$lease['_prd_marque_']);
                        array_push($ar_commd,$cmd);
                    break;
                  
                  default:
                    # code...
                    break;
                }
              }
              return $ar_commd;
            }
          }

            // ------------------------------   david don't go beyond this line   ----------------------------------------- //
        }
      }  
      catch(PDOException $ex)
      { 
        die('
            <div class="container-fluid">
              <div class="navbar navbar-default"></div>
              <div class="alert alert-danger">
                  <b>Il y a eu une erreure lors de la tentative de connection a\' 
                  la :::BANK DES DONNEES ::: Veillez contacter l\'admin +243 970 284 772</b>
              </div>
              <div class="alert alert-danger">
                '.$ex->getMessage().'
              </div>
            </div>'     
        );
      }

?>