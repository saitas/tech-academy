<?php

$left  = null;
$right = null;

$errorMessages[] = array();

$myself = getMyUri();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['left'])){
		$left = $_POST['left'];
	}

	if(isset($_POST['right'])){
		$right = $_POST['right'];
	}


	// redirect
	header("Location: {$myself}");
	exit;

}else{
	echo 'this is get.';
}

echo $left . '@' .$right;


//
// functions
//

function getMyUri(){
	return  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
