<?php
///////////////
$cat_id = htmlspecialchars($_GET['cat_id']);//板块id
$apikey = htmlspecialchars($_GET['apikey']);//您设置的apikey
$credistnum = "1";//赠送的葫芦数
$msg = "测试";//赠送的留言
$postsnum = "5";//检测帖子数量，监控时间越短此值应当越高
$sleeptime = "5";//冷却时间，太短会赠送失败
///////////////

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
  
  //POST函数
  function HttpPost($url,$data=null){
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  if(!empty($data)){
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  }
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($curl);
  curl_close($curl);
  return $output;
  }
$list = HttpPost("http://floor.huluxia.com/post/list/ANDROID/2.1?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=&device_code=000000000000000-0000-0000-0000-000000000000&start=0&count=20&cat_id=".$cat_id."&tag_id=0&sort_by=0");
$str = json_encode(json_decode($list)->posts);
$str = json_decode($str, true);
$array = json_decode(file_get_contents("./list.json"));
$i = 0;
foreach($str as $post){
    if($i<20){
      if(in_array($post['postID'],$array)){
        $i = $i+1;
      }else{
        $i = $i+1;
        array_push($array,$post['postID']);
        echo file_get_contents("http://".$_SERVER['SERVER_NAME']."/Credits.php?postid=".$post['postID']."&msg=".$msg."&sum=".$credistnum."&apikey=".$apikey);
        echo "<br \>";
      }
    }
}
file_put_contents("./list.json",json_encode($array));
?>