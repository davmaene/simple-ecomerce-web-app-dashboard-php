(function() {

	// for sign up script this is my only drug coding
	var outputMess = document.getElementById('hdn_label');
	var psswd = '';
	var _checkThis = {};

	function get_chck(es,comm){
		var chck = document.getElementById('chk_fn_' + es );
		// console.log(chck.className);
		if(comm === 1){
			chck.classList.remove('hdn');
			document.getElementById(es).classList.remove('error-border');
			outputMess.classList.add('hdn');

		}else if(comm === 0){
			chck.classList.add('hdn');
			document.getElementById(es).classList.add('error-border');
			outputMess.classList.remove('hdn');
		}

	}
	_checkThis['fstName'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,1);
					return true;
				}else{
					get_chck(id,0);
					outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,0);
				outputMess.innerHTML = '&nbsp; first name is too short'; 
			}
	};
	_checkThis['lstName'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,1);
					return true;
				}else{
					get_chck(id,0);
					outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,0);
				outputMess.innerHTML = '&nbsp; last name is too short'; 
				return false;
			}
	};
	_checkThis['emailfrom'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,6})$/).test(name.value)){
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,0);
				outputMess.innerHTML = '&nbsp; Invalid mail adresse'; 
				return false;
			}
			
	};
	_checkThis['phonenumber'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^[0-9+]{9,12}$/).test(name.value)){
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,0);
				outputMess.innerHTML = '&nbsp; invalide number ( 10 digits min )'; 
				return false;
			}
			
	};
	_checkThis['password_1'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 6){
				if((/^[a-zA-Z0-9._-]+$/).test(name.value)){
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					psswd = name.value;
					return true;
				}else{
					get_chck(id,0);
					outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
					return false;
				}
			}else{
				get_chck(id,0);
				outputMess.innerHTML = '&nbsp; too short password (6 chrtr min)'; 
				return false;
			}
			
	};
	_checkThis['password_2'] = function(id){
		// console.log();
		var name = document.getElementById(id);

				if((/^[a-zA-Z0-9._-]+$/).test(name.value)){
					if(name.value === psswd){
					// alert(psswd);
				get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return true;
					}else{
						get_chck(id,0);
						outputMess.innerHTML = '&nbsp; the passwords are not the same';
						return false;
					}
				}else{
					get_chck(id,0);
					outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
					return false;
				}
			
	};
	var input = document.getElementsByTagName('input'),L = input.length;
		for (let index = 0; index < L; index++) {
			// var splC = input[index].className.split(' ');
			if (input[index].type == 'text' || input[index].type == 'email' || input[index].type == 'password') {
				input[index].onkeyup = function(e){
					_checkThis[this.id](this.id);
				}
			}
		}	
	// action when clicking 
	document.getElementById('btn_signup').onclick = function(){
		var resChecking = true;
		for (const key in _checkThis) {
			if (_checkThis.hasOwnProperty(key)) {
				resChecking = _checkThis[key](key);
			}
		}
		if(resChecking){
			// var cab = document.getElementById('form_signup');
			const form = new FormData(document.getElementById('form_signup'));
			var xhr = new XMLHttpRequest();
            xhr.open('POST','../dist/js/_phpSubmition.php',true);
            xhr.send(form);
            xhr.onreadystatechange = function(){
             if (xhr.readyState == 4 && xhr.status == 200) {
				 window.location.href = '../../index.php';
            //     if(xhr.response.indexOf(xhr.status) != -1){
            //         cleanValues();
            //         commandSpinner(0);
            //         chk.remove('hidden');
            //     }else{
            //         commandSpinner(0);
            //     }
			//  }
			// window.location.href = '_get_login_pg_.php';
			alert('ajouter avec succes');
			console.log('parfait');
           }
		}
	}
	};
})();