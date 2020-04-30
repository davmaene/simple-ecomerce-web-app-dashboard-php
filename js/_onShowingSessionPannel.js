(function(){
    document.getElementById('_pannelSession_').onclick = function(){
        var spltted = document.getElementById('_popUpWheneSession_').className.split(' ');
        if(spltted.includes('hidden')){document.getElementById('_popUpWheneSession_').classList.remove('hidden');
        }else{document.getElementById('_popUpWheneSession_').classList.add('hidden');} 
    };
    // for olds browsers
    document.getElementById('_pannelSession_').onclick = function(){
    	var kab = document.getElementById('_popUpWheneSession_').className.split(' ');
    	if (kab.indexOf('hidden') != -1) {
    		document.getElementById('_popUpWheneSession_').classList.remove('hidden');
    	}else{
    		// alert('not exist')
    		document.getElementById('_popUpWheneSession_').classList.add('hidden')
    	}


    };
})()