葫芦侠三楼小工具  
使用前准备：  
1：下载仓库到本地，打开login.php，根据注释修改账号密码两个信息  
2：将几个php文件上传至服务器，并在浏览器打开 http://你的域名/PostsList.php?apikey={您设置的apikey} ，找到帖子id  
  
小工具使用方法：  
1：自动顶贴工具：在浏览器中打开 http://你的域名/SendMessage.php?msg={需要发布的评论文字(支持中文)}&postid={帖子id}&apikey={您设置的apikey}  
![avatar](https://raw.githubusercontent.com/xiguac/HuluxiaTools/main/2.png)   
2：一键送葫芦工具：在浏览器打开http://你的域名/Credits.php?postid={帖子id或评论id}&msg={送葫芦留言}&sum={需要送的数量}&apikey={您设置的apikey}  
3：自动签到工具：在浏览器打开http://你的域名/Sign.php?apikey={您设置的apikey}（每天访问一次）即可实现每个板块自动签到
小技巧：可以使用定时任务等程序实现自动顶贴等操作，使帖子排名靠前  
4：获取收藏列表：在浏览器打开http://你的域名/CollectList.php?uid={用户id}&count={获取数量}&type={类型,传入table为表格，json为json数据}  
5：获取关注列表：在浏览器打开http://你的域名/FriendshipsList.php?uid={用户id}&count={获取数量}&type={类型,传入table为表格，json为json数据}  
  
其他工具：
1：监控板块新帖发布，并给新帖赠送葫芦（适合版主使用）：在浏览器打开http://你的域名/SendCredits.php?apikey={您设置的apikey}&cat_id={板块id}
【此工具会自动获取板块前几个帖子（具体数量自定义），如果有新帖会自动赠送葫芦。您也可以打开SendCredits.php编辑赠送相关数据，但是请不要删除list.json或者修改list.json!!】
  
写在最后   
1：顶贴过于频繁会被锁帖！！  
2：此程序仅供学习交流，勿用于非法用途！
