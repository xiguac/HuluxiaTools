<?php
include('./login.php');

$creditspostid = htmlspecialchars($_GET['postid']);
$creditsmsg = urlencode(htmlspecialchars($_GET['msg']));
$creditssum = (int)htmlspecialchars($_GET['sum']);
if($creditssum<=0){$creditssum="1";}//如果数量小于1
if(empty($creditsmsg)){$creditsmsg = urlencode("作者大大加油！");}//如果传入的msg为空
$result = json_decode(HttpPost("http://floor.huluxia.com/credits/transfer/ANDROID/2.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000","post_id=".$creditspostid."&type_id=1&isadmin=0&score=".$creditssum."&score_txt=".$creditsmsg));
if($result->status==1 && $result->iscredits==1){
    echo "赠送成功！";
}else{
    echo "赠送失败！";
}?>
