<?php 
if(!isset($_SESSION['_userId_'])) {
?>
<style>
    li.active_p a{
        background: #1a82db;
    }
    .error_{
        border:1px solid red;
    }
    .to{
        font-family:sans-serif;
    }
</style>
 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="#"> Pages</a>
                        <span>créer un compte</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Créer un compte</h2>
                    <form action="#" method="POST" id="_newCustomer_">
                        <div class="group-input">
                            <label for="username">Nom</label>
                            <input class="to" type="text" id="name1" name="name1">
                            <span class="text-danger hdn" id="chk_fn_name1"><span class="fa fa-warning"></span> le nom est invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Postnom</label>
                            <input class="to" type="text" id="name2" name="name2">
                            <span class="text-danger hdn"  id="chk_fn_name2"><span class="fa fa-warning"></span> le postnom est invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Adresse mail</label>
                            <input class="to" type="email" id="email_" name="email_">
                            <span class="text-danger hdn" id="chk_fn_email_"><span class="fa fa-warning"></span> Adresse mail invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Numero de téléphone</label>
                            <input class="to" type="text" id="phonenum" name="phonenum">
                            <span class="text-danger hdn" id="chk_fn_phonenum"><span class="fa fa-warning"></span> le numero est incorrect</span>
                        </div>
                        <div class="group-input">
                            <label for="pass">mot de pass*</label>
                            <input class="to" type="password" id="pass_1" name="pass_1">
                            <small class="text-danger hdn" id="chk_fn_pass_1"><span class="fa fa-warning"></span> le mot de passe doit etre > 6 charactères  et quelques symboles (. , _ , -)</small>
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirmer le mot de pass*</label>
                            <input class="to" type="password" id="con-pass" name="con-pass">
                            <span class="text-danger hdn" id="chk_fn_con-pass"><span class="fa fa-warning"></span> les mots de passe ne sont pas identique ou vides</span>
                        </div>
                        <button type="button" class="site-btn register-btn" id="crt_account">Créer un compte</button>
                    </form>
                    <div class="switch-login">
                        <a href="?page=_signIn" class="or-login">J'ai déjà un compte Connexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
<script>
    (function(){

    var _checkThis_ = {};
    var psswd;
    function get_chck(es,comm){
		var chck = document.getElementById('chk_fn_' + es );
		// console.log(chck.className);
		if(comm === 1){
			chck.classList.remove('hdn');
			document.getElementById(es).style.border = "1px solid red";
			// outputMess.classList.add('hdn');

		}else if(comm === 0){
			chck.classList.add('hdn');
			document.getElementById(es).style.border = "1px solid #6A9955";
			// outputMess.classList.remove('hdn');
        }
    }
    _checkThis_['name1'] = function(id){
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,0);
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; first name is too short'; 
			}
	};
	_checkThis_['name2'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,0);
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; last name is too short'; 
				return false;
			}
	};
	_checkThis_['email_'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,6})$/).test(name.value)){
				get_chck(id,0);
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; Invalid mail adresse'; 
				return false;
			}
			
	};
	_checkThis_['phonenum'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^[0-9+]{9,13}$/).test(name.value)){
				get_chck(id,0);
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; invalide number ( 10 digits min )'; 
				return false;
			}
			
	};
	_checkThis_['pass_1'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 6){
				if((/^[a-zA-Z0-9._-]+$/).test(name.value)){
					get_chck(id,0);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					psswd = name.value;
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; too short password (6 chrtr min)'; 
				return false;
			}
			
	};
	_checkThis_['con-pass'] = function(id){
        // console.log();
        psswd = document.getElementById('pass_1').value;
		var name = document.getElementById(id);

				// if((/^[a-zA-Z0-9._-]+$/).test(name.value)){
					if(name.value === psswd && name.value != ''){
					// alert(psswd);
                        get_chck(id,0);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return true;
					}else{
						get_chck(id,1);
						// outputMess.innerHTML = '&nbsp; the passwords are not the same';
						return false;
					}
				// }else{
				// 	get_chck(id,1);
				// 	// outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
				// 	return false;
				// }
			
	};
        document.getElementById('crt_account').onclick = function(){
            var resChecking = true;
            for (const key in _checkThis_) {
                if (_checkThis_.hasOwnProperty(key)) {
                    resChecking = resChecking & _checkThis_[key](key);
                }
            }
            if (resChecking) {
            const _form_ = new FormData(document.getElementById('_newCustomer_'));
			var xhr = new XMLHttpRequest();
            xhr.open('POST','js/_onSubmit.php',true);
            xhr.send(_form_);
            xhr.onreadystatechange = function(){
             if (xhr.readyState == 4 && xhr.status == 200) {
                if(xhr.response.indexOf(xhr.status) != -1){

                    window.location.href = '?page=_signIn';
            //         cleanValues();
            //         commandSpinner(0);
            //         chk.remove('hidden');
            //     }else{
            //         commandSpinner(0);
            //     }
			 }
			// window.location.href = '_get_login_pg_.php';
			console.log(xhr.response);
           }
		}
            }
        }
        var domInput = document.getElementsByTagName('input');
        for (let index = 0; index < domInput.length; index++) {
                if (domInput[index].type == 'text' || domInput[index].type == 'password' || domInput[index].type == 'email') {
                    if (domInput[index].className.indexOf('to') != -1) {
                        domInput[index].onkeyup = function(e){
                        _checkThis_[this.id](this.id);
                    } 
                    }
                }
            }
    })();
</script>
<?php }else{ header("location:?page=_commandes");} ?>