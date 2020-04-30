(function(){
    // on subscription to newsLetter
document.getElementById('onSubscib').onclick = function(){

var formulaire = document.getElementById('subscribeForm');
const formData = new FormData(formulaire);
var xhr = new XMLHttpRequest();
xhr.open('POST','js/_onSubmit.php',true);
xhr.send(formData);
var vMail = clc('Inscription en cours ...');
xhr.onreadystatechange = function(){
if (xhr.readyState == 4 && xhr.status == 200) {
    vMail = clc('');
    // console.log(xhr.responseText);
}
}
};
})();