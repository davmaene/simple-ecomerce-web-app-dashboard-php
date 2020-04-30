(function(){
    var cd_ = document.getElementById('_output_');
    
    function check_name(){
      let nameC =  document.getElementById('cmm_i');
     if (nameC.value.length >= 2 && (/^[a-z._-]+$/.test(nameC.value))) {
        cd_.classList.add('hidden');
        nameC.style.borderColor = '#E9EBEC';
        return true;
     }else{
         nameC.style.borderColor = '#E04343';
         commandSpinner(0);
         cd_.classList.remove('hidden');cd_.innerHTML = '<span class="fa fa-warning"></span>&nbsp;Le nom est invalide!';
         return false;
     }
    }
    function check_mail(){
        let nameC =  document.getElementById('cmm_e');
        if ((/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,6})$/).test(nameC.value)) {
            nameC.style.borderColor = '#E9EBEC';
            cd_.classList.add('hidden');
            return true;
        }else{
            nameC.style.borderColor = '#E04343';
            commandSpinner(0);
            cd_.classList.remove('hidden');cd_.innerHTML = '<span class="fa fa-warning"></span>&nbsp;Adresse email invalide!';
            return false;
        } 
    }
    function check_commentMssg(){
        let nameC =  document.getElementById('cmm_t');
       if (nameC.value.length >= 5) {
          cd_.classList.add('hidden');
          nameC.style.borderColor = '#E9EBEC';
          return true;
       }else{
           nameC.style.borderColor = '#E04343';
           commandSpinner(0);
           cd_.classList.remove('hidden');cd_.innerHTML = '<span class="fa fa-warning"></span>&nbsp;message invalide!';
           return false;
       }
      }
    function commandSpinner(ech){
        // 1 correspond a 'run'
        // 0 correspond a 'stop'
        var out_s = document.getElementById('_btn_comment_anim_');
        switch (ech) {
            case 1:
                // alert('dans run');
                out_s.classList.remove('hidden')
                break;
            case 0:
                // alert('dans stop');
                out_s.classList.add('hidden')
                break;
            default:
                // alert('dans default');
                break;
        }
    }
    // clean values
    function cleanValues(){
        document.getElementById('cmm_i').value = null;
        document.getElementById('cmm_e').value = null;
        document.getElementById('cmm_t').value = null;

    }
    document.getElementById('_onLeaveComment_').onclick = function(){
        var chk = document.getElementById('_checked_').classList;
        commandSpinner(1);
        const form = new FormData(document.getElementById('leaveCommForm'));
        check_name();
        check_mail();
        check_commentMssg();
        
        if(check_commentMssg() && check_mail() && check_name()){
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST','js/_onSubmit.php',true);
            xhr.send(form);
            xhr.onreadystatechange = function(){
             if (xhr.readyState == 4 && xhr.status == 200) {
                if(xhr.response.indexOf(xhr.status) != -1){
                    cleanValues();
                    commandSpinner(0);
                    chk.remove('hidden');
                }else{
                    commandSpinner(0);
                }
             }
           }
        }
    };

})(); 