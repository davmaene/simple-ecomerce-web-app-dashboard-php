(function () {
    // body...
    document.getElementById('btn_conn').onclick = function(){
        // alert(this.innerHTML)
       const dm = document.getElementById('btn_conn_anim').classList;
       const dm_ = document.getElementById('btn_conn_anim_').classList;
       var dom = document.getElementById('formConn');
       const form = new FormData(dom);
       var xhr = new XMLHttpRequest();
            xhr.open('POST','js/_onSubmit.php',true);
            xhr.send(form);
            dm.remove('hidden'); 
            xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                if(xhr.response.indexOf(xhr.status) == -1){
                    console.log(xhr.response);
                    dm.add('hidden');
                    document.getElementById('tooltip_p').classList.remove('hidden');
                    document.getElementById('tooltip').innerHTML = xhr.responseText;
                }if(xhr.response.indexOf(xhr.status) != -1){
                    console.log(xhr.response);
                    document.getElementById('tooltip_p').classList.add('hidden');
                    setTimeout(function() {
                        window.location.href = '?page=_commandes';
                        // alert(1)
                    },1000);
                    
                }
            }
        };
    };
})();