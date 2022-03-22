<?php
include('./login.php');

$msg = htmlspecialchars($_GET['msg']);
$id = htmlspecialchars($_GET['postid']);

if(empty($msg) or empty($id)){exit("评论消息或帖子id为空，请重新输入");}
$msg = urlencode($msg); //url编码评论消息
//发布评论消息
echo HttpPost("http://floor.huluxia.com/comment/create/ANDROID/2.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000","post_id=".$id."&comment_id=0&text=".$msg."&patcha=&images=&remindUsers=");
?>
