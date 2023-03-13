<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .float{
	position:fixed;
	bottom:40px;
	right:40px;
}

  </style>
</head>
<body>
</br></br></br>



<a href="#" class="float">
<div id="CallScripts"></div>
<div id="CallmeWidget"></div>
</a>

<script>
(function() {  
	var script = document.createElement('script');  
	script.src = 'https://sohub.com.bd/click-to-call/loader.js';  
	document.getElementById('CallScripts').appendChild(script);}());
	
var CallmeWidget;
var CallmeWidgetFn = function() {
    CallmeWidget = new CallmeWidgetNew("CallmeWidget");
    CallmeWidget.create({
        "widgetId": "kkd8cVk8N21vesXKxvBfBebcUCGtaMy5cv18TT8PJ49eXrGxzt66R7S7kb96GeSmc8v9rthssgau1m3c6GT4gTg2Unesb8zz7c351bcafe4aeb79ac80e811dd16266c",
        "sipId": "1234",
        "domElement": "CallmeWidget"
    }, {
        "shape": "square",
        "language": "en",
        "width": "0",
        "dtmf": false,
        "dtmf_position": "top",
        "dtmf_time_to_disappear": "20",
        "font": "'Trebuchet MS','Helvetica CY',sans-serif",
        "color_call": "rgb(255, 255, 255)",
        "color_bg_call": "rgb(126, 211, 33)",
        "color_border_call": "rgb(191, 233, 144)",
        "color_connection": "rgb(255, 255, 255)",
        "color_bg_connection": "rgb(33, 211, 166)",
        "color_border_connection": "rgb(144, 233, 211)",
        "color_calling": "rgb(255, 255, 255)",
        "color_border_calling": "rgb(255, 218, 128)",
        "color_bg_calling": "rgb(255, 181, 0)",
        "color_ended": "rgb(255, 255, 255)",
        "color_bg_ended": "rgb(164,164,164)",
        "color_border_ended": "rgb(210, 210, 210)"
    });
};
if (window.addEventListener) {
    window.addEventListener('load', CallmeWidgetFn, false);
} else if (window.attachEvent) {
    window.attachEvent('onload', CallmeWidgetFn);
}


</script>


</body>
</html>