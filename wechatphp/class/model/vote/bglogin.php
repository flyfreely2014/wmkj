<?php
header("Content-type: text/html; charset=utf-8"); 
/*
登入，注册页面处理模块
*/

session_start();
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/common/Define.php';
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/class/PicArc.php';
if (isset($_POST['sign'])){
		$usename  = $_POST['usename'];
		$_SESSION['username'] = $usename;
		$password = md5($_POST['password']);
		if($usename == 'ecjtu_gbz' && $password ==md5('ecjtu_gbz'))
		{
					echo $_SESSION['username'];
					header("Location: ./submit.php");
		}
	}

	
/////////////////////////////////////////the end of php
/////////////////////////////////////////power by homker
	
?>