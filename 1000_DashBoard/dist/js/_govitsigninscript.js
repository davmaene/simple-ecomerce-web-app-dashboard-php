(function(){
    // document.getElementsByTagName
    var cd = document.getElementById('cab_logmein');
    const form = new FormData(cd);
    document.getElementById('cab_logIn').onclick = function(){
       var em = document.getElementById('cab_email');
       var pwd = document.getElementById('cab_pwd');
        if(em.value === '' && pwd.value === ''){
            em.style.borderColor = '#E04343';
            pwd.style.borderColor = '#E04343';
            
            //     var xhr = new XMLHttpRequest();
            //     xhr.open('POST','../dist/php/_signmein.php',true);
            //     xhr.send(form);
            //     xhr.onreadystatechange = function(){
            //      if (xhr.readyState == 4 && xhr.status == 200) {
            //         // alert(em+'- je -'+pwd);
            //         alert(xhr.response);
            //    }
            // }
        }
    };
})();