(function () {
    // body...
  
    document.getElementById('btn_conn_').onclick =  function(){
        // alert(this.innerHTML)
       var dm = document.getElementById('btn_conn_anim_').classList;
       var dm_ = document.getElementById('btn_conn_anim__').classList;
       var dom = document.getElementById('formConn_');
       const form = new FormData(dom);
       var xhr = new XMLHttpRequest();
            xhr.open('POST','js/_onSubmit.php',true);
            xhr.send(form);
            document.getElementById('btn_conn_anim_').classList.remove('hidden'); 
            xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                if(xhr.response.indexOf(xhr.status) == -1){
                    console.log(xhr.response);
                    document.getElementById('btn_conn_anim_').classList.add('hidden');
                    document.getElementById('tooltip_p_').classList.remove('hidden');
                    document.getElementById('tooltip_').innerHTML = xhr.responseText;
                }if(xhr.response.indexOf(xhr.status) != -1){
                    console.log(xhr.response);
                    document.getElementById('tooltip_p_').classList.add('hidden');
                    setTimeout(function(){
                        window.location.reload();
                        // alert(dm)
                    },1000);
                    
                }
            }
        };
    };
})();