// 'use-strict';
(function(){
    var header = document.getElementById('header_');
    // var mydom = document.getElementById('')
//    animate navbar on scrolling body
    window.onscroll = function(){
        if(document.body.clientWidth >= 768){
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                console.log(document.body.scrollHeight);
            }else{
                // header.classList.remove('fixed-top');
                console.log(document.body.scrollHeight);
            }
            // console.log(document.body.clientWidth);
        }
    }
 
})();

    function _asynchron(){setTimeout(_redirectMe,1200);}
    function clc(s) {return document.getElementById('mailSub').value = s;}
    function _redirectMe(){window.location.href = _getCurrentPage();}
    function _getCurrentPage()
    {
        var dom_ = window.location.href;
            dom_ = dom_.substring(dom_.lastIndexOf('?'));
            return dom_;   
    }
