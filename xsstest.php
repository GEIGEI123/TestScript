<?php 
	if($_GET['xss']==null){
		$xss=$_POST['xss'];
	}else{
		$xss=$_GET['xss'];
	}
	echo $xss; 
?>