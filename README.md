Vcode
=====

Vcode.class.php 验证码生产类

vsersion:2.0 
author:silenceper
说明:
  支持中英文验证码生产类，使用方法：<br/>

<code>
  <?php
    	include 'Vcode.class.php';
	$code=new Vcode();
	$code->showImage("./simsun.ttc",true);//true 表示使用中文验证码
  ?>
</code>

  
