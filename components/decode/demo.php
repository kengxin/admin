<?php

include_once "wxBizMsgCrypt.php";

// 第三方发送消息给公众平台
$encodingAesKey = "MlkRSUrVgUj54vw1eG4w3gX0P5lG84EzqBsp0o5pWNn";
$token = "wechat";
$timestamp  = $_GET['timestamp'];
$nonce = $_GET["nonce"];
$msg_signature  = $_GET['msg_signature'];
$appId = "wx4234d16cda2841f9";

$data = file_get_contents('php://input');

$pc = new WXBizMsgCrypt($token, $encodingAesKey, $appId);

$msg = '';
$errCode = $pc->decryptMsg($msg_signature, $timestamp, $nonce, $data, $msg);
if ($errCode == 0) {
	print("解密后: " . $msg . "\n");
} else {
	print($errCode . "\n");
}
