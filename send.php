<?php

if(isset($_POST['Submit'])){
	$msg='Name:' .$_POST['name'] ."\n"
		.'Email:' .$_POST['email'] ."\n"
		mail('dpphani5@gmail.com', 'Sample request form', $msg);
		header('location: thank.php');
}else
{
	header{'location:index.php'};
	exit(0);
}

?>