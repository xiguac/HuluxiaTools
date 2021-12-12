<?php
include('./login.php');

//获取帖子列表
$list = HttpGet("http://floor.huluxia.com/post/create/list/ANDROID/2.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&start=0&count=20&user_id=".$uid);
echo $list;
?>