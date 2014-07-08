Vcode
=====

<h5>Vcode.class.php 验证码生产类</h5>
<hr/>
<b>
vsersion:2.0 <br/>
author:silenceper<br/>
email:silenceper#gmail.com(将#改为@)<br/>
</b>

<hr/>
说明:
  支持中英文验证码生产类，使用方法：<br/>

<pre>
include 'Vcode.class.php';<br/>
$code=new Vcode();<br/>
$code->showImage("./simsun.ttc",true);//true 表示使用中文验证码<br/>
</pre>
