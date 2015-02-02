<?php

/****************************
* 	Signaturmakeren 2000
*****************************
* Dette vev-skriptet er skrevet i håp om å forenkle det å
* lage e-post signaturer, samtidig som man umuliggjør feil-
* stegene de fleste tar.
*
* Som navnet signaliserer skal denne opprette signaturen din,
* helt enkelt.
*
* Akkurat denne signaturmakeren er spesiallaget for Hyperion,
* Norsk Forbund for Fantastisk Fritidsinteresser.
* 
* @author Simen A. W. Olsen
* @created 26. jan 2015
*
*/

$file = "templates/signatur.php";

$dir = scandir('settings');
$configs = array();

foreach ($dir as $key => $value) {
	$config = @parse_ini_file('settings/'.$value);
	if($config) $configs[$value] = $config;
}


if(count($_POST) > 0){
	$config = parse_ini_file('settings/'.$_POST['config']);
	require('templates/signatur.php');
} else {
	require('templates/form.php');
}