/* SOHUB Click To Connect Widget*/

var script1 = document.createElement('script');
script1.src = 'https://sohub.com.bd/click-to-call/detectWebRTC.min.js';
document.getElementById('CallScripts').appendChild(script1);

var script2 = document.createElement('script');
script2.src = 'https://sohub.com.bd/click-to-call/jssip.min.js';
document.getElementById('CallScripts').appendChild(script2);

var script3 = document.createElement('script');
script3.src = 'https://sohub.com.bd/click-to-call/widget.min.js?version=5';
document.getElementById('CallScripts').appendChild(script3);

var styl = document.createElement('link');
styl.setAttribute('rel', 'stylesheet');
styl.href = 'https://sohub.com.bd/click-to-call/style.min.css';
document.getElementById('CallScripts').appendChild(styl);