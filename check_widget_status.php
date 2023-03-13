<?php
header("Content-Type: application/json; charset=UTF-8");
echo 'CallmeWidget.zadarmaCreate({
	"txt_greeting":"Call",
	"txt_nowebrtc":"Error",
	"status":1,
	"texts":{
		"call":"Call us",
		"connection":"Connecting...",
		"ended":"Call ended",
		"buzy":"Busy",
		"dtmf":"Use numbers for the voice menu",
		"finishCall":"End conversation",
		"nowebrtc":"The widget is not available for this browser"}})';
		
	