通知管理系统
=====

 > *本都启动  php -S 127.0.0.1:8000 -t public
 
 > *浏览器访问 http://localhost:8000/  
    
    
  初始框架安装组件
  
  * composer require annotations   本系统下路由统一采用annotation定义
  * composer require messenger     引用Messenger组件，使用消息队列对消息通知进行处理
  * composer require symfony/serializer-pack