#葫芦侠三楼小工具  
##使用方法：  
###1：下载仓库到本地，打开login.php，根据注释修改账号密码两个信息  
###2：将三个php文件上传至服务器，并在浏览器打开 http://你的域名/GetList.php ，找到帖子id（如图）  
![avatar](https://raw.githubusercontent.com/xiguac/HuluxiaTools/main/1.png)  
###3：在login.php中输入帖子id和需要评论的内容  
###4：在浏览器中打开 http://你的域名/SendMessage.php ,如果提示`发布成功`表示搭建完毕（如图）  
![avatar](https://raw.githubusercontent.com/xiguac/HuluxiaTools/main/2.png)  
###5：在服务器添加定时任务，定时访问 http://你的域名/SendMessage.php 即可实现自动顶贴  
  
##写在最后  
###1：时间仓促，获取帖子列表转换为表格功能还没有实现  
###2：顶贴过于频繁会被锁帖！！
###3：此程序仅供学习交流，勿用于非法用途！
