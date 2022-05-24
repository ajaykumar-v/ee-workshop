<?php 

$contactId='';

if (isset($_POST['contactId'])) {
	$contactId=$_POST['contactId'];
}
if ($contactId == '') {
	if (isset($_GET['contactId'])) {
		$contactId=$_GET['contactId'];
	}
}

//$contactId = 60;

if ($contactId != '') {
	require("isdk.php");  
	$myApp = new iSDK;

	$groupId=102;

	$contactFound=0;
	if($myApp->cfgCon("connectionName")){
		$result=$myApp->grpAssign($contactId,$groupId);
	}
}

header("Content-type: image/png");
$im=@imagecreate(1,1) or die ("");
$background_color=imagecolorallocate($im,255,255,255);
imagepng($im);
imagedestroy($im);

?>
