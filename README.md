Vcode.class.php 验证码生产类
====
<b>
vsersion:2.0    
author:silenceper   
email:silenceper#gmail.com(将#改为@)    
</b>

说明:
====
  支持中英文验证码生产类，使用方法:    

```php
include 'Vcode.class.php';   
$code=new Vcode();   
$code->showImage("./simsun.ttc",true);//true 表示使用中文验证码   
```
效果
====
中文验证码：   
![中文验证码](http://silenceper.qiniudn.com/wp-content/uploads/2013/01/QQ%E6%88%AA%E5%9B%BE20130121184152.png)   
英文验证码：   
![英文验证码](http://silenceper.qiniudn.com/wp-content/uploads/2013/01/QQ%E6%88%AA%E5%9B%BE20130118181912.png)   

