<?php
include('./login.php');

//获取帖子列表
$list = HttpGet("http://floor.huluxia.com/post/create/list/ANDROID/2.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&start=0&count=20&user_id=".$uid);
$str = json_encode(json_decode($list)->posts);//解析数据
$str = json_decode($str, true);
echo '    <link rel="stylesheet" type="text/css" href="https://githubcdn.oa5.xyz/layui/css/layui.css" />
<table class="layui-table">
<thead>
  <tr>
    <th>帖子id</th>
    <th>标题</th>
    <th>内容</th>
  </tr> 
</thead>
<tbody>
';
  foreach($str as $post){
    echo '
    <tr>
    <td>'.$post['postID'].'</td>
    <td>'.$post['title'].'</td>
    <td>'.$post['detail'].'</td>    
    </tr>
    ';
}
echo'

</tbody>
</table>';

?>
