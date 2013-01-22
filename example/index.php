<?php
	include '../Vcode.class.php';
	$code=new Vcode();
	//参数true表示 使用中文验证码  默认使用英文验证码
	$code->showImage("./simsun.ttc",true);
?>
