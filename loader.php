<?php
$pageVar=$_POST['pageVar'];

if ($pageVar=="home") {
		include("carousel.php"); 
}else if($pageVar=="aboutUS") {
		include("jumbotron.php");
}

?>