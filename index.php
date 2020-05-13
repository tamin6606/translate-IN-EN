<?php
require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\GoogleTranslate;

if(isset($_GET['to'])){
	$key=$_GET['to'];
	$pesan=$_GET['text'];
	if($key=='id'){
		$tr = new GoogleTranslate();
		$tr->setSource('en');
		$tr->setSource();
		$tr->setTarget('id');
		$message=$tr->translate($pesan);
	}elseif($key=='en'){
		$tr = new GoogleTranslate();
		$tr->setSource('id');
		$tr->setSource();
		$tr->setTarget('en');
		$message=$tr->translate($pesan);
	}
}else{
	$tr = new GoogleTranslate();
	$tr->setSource('en');
//	$tr->setSource();
	$tr->setTarget('id');
	$message=$tr->translate('Hello World!');
}
echo $message;
?>