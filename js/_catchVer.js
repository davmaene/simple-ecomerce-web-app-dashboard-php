(function(){
    var ua = navigator.userAgent,
    index,
    navigateur,
    version;
if((index = ua.indexOf('Firefox'))>=0) {
    navigateur = 'Firefox';
    version = ua.match(/Firefox\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('MSIE'))>=0) {
    navigateur = 'Internet Explorer';
    version = ua.match(/MSIE ([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Chrome'))>=0) {
    navigateur = 'Google Chrome';
    version = ua.match(/Chrome\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Opera'))>=0) {
    navigateur = 'Opera';
    version = ua.match(/Version\/([0-9]+(?:\.[0-9]+)*)/)[1] || ua.match(/Opera\/([0-9]+(?:\.[0-9]+)*)/)[1];
} else if((index = ua.indexOf('Safari'))>=0) {
    navigateur = 'Safari';
    version = ua.match(/Version\/([0-9]+(?:\.[0-9]+)*)/)[1] || ua.match(/Safari\/([0-9]+(?:\.[0-9]+)*)/)[1];
}
// alert(navigateur+' '+version);
// if(navigateur === 'Google Chrome'){
//     window.location.href = 'https://google.com';
// }
})();