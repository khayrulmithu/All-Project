<?php 

unset($_SESSION['login']);
unset($_SESSION['loginFinal']);
unset($_SESSION['select']);

		$_SESSION['signup'] = 0;
		$_SESSION['update'] = 0;

		$_SESSION['login1']=0;
		$_SESSION['login2']=0;
		$_SESSION['login3']=0;

header("Location: ./index.php");

?>