<?php
	session_start();
	include '../Vcode.class.php';
	$code=new Vcode();
	//参数true表示 使用中文验证码  默认使用英文验证码
	$code->showImage("./simsun.ttc",true);
	//获取session  必须在 showImage 方法之后再获取验证码字符串
	$_SESSION['code']=$code->code; 
?>
