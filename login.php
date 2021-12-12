<?php
//////////在此处设置账号信息//////////
$acc = '';  //手机号
$pass = '';  //密码
$msg = '';  //需要评论的内容
$id = ''; //帖子id
//////////////////////////////////////


//用户登录，获取信息
$pass = md5($pass);  //MD5加密用户密码
$u = json_decode(HttpPost("http://floor.huluxia.com/account/login/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=&device_code=000000000000000-0000-0000-0000-000000000000","account=".$acc."&login_type=2&password=".$pass));
$ukey = $u->_key; //用户key
$uid = $u->user->userID;  //用户id


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
?>