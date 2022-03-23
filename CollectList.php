<?php
//GET函数
function HttpGet($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $tmpInfo = curl_exec($curl);
    if(curl_exec($curl) === false)
    {
    return 'Curl error: ' . curl_error($ch);
    }
    curl_close($curl);
    return $tmpInfo;
}
$uid = htmlspecialchars($_GET['uid']);
$count = htmlspecialchars($_GET['count']);
$type = htmlspecialchars($_GET['type']);

if($count<=0){$count="20";}//如果数量小于1
$list = json_decode(HttpGet("http://floor.huluxia.com/post/favorite/list/ANDROID/2.0?start=0&count=".$count."&user_id=".$uid));
$str = $list->posts;//解析数据
$str = json_decode(json_encode($str), true);
if($type=="table"){
    echo '<h1>用户收藏列表</h1>    <link rel="stylesheet" type="text/css" href="https://githubcdn.oa5.xyz/layui/css/layui.css" />
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
}else{
	$i = "1";
    echo '{"code":1,"posts":[';
    foreach($str as $post){
		if($i==$count){
			echo '{"id":'.$post['postID'].',"title":"'.$post['title'].'","detail":"'.$post['detail'].'"}';
			$i = $i+"1";
		}else{
			echo '{"id":'.$post['postID'].',"title":"'.$post['title'].'","detail":"'.$post['detail'].'"},';
			$i = $i+"1";
		}
	}
    echo ']}';
}
?>