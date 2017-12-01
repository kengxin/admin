<?php

include_once "../components/decode/wxBizMsgCrypt.php";

// 第三方发送消息给公众平台
$encodingAesKey = "MlkRSUrVgUj54vw1eG4w3gX0P5lG84EzqBsp0o5pWNn";
$token = "wechat";
$timestamp  = 1512127127;
$nonce = 436436587;
$msg_signature  = '13a8a29664760e560ffa2368153ab993cb470a26';
$appId = "wx4234d16cda2841f9";

$data = file_get_contents('php://input');
$data = <<<XML
<xml>
    <AppId><![CDATA[wx4234d16cda2841f9]]></AppId>
    <Encrypt><![CDATA[hpzWNe35M0YcomwDitdDu0iKy02ZIdZvTzcu+yiN26iIC97v4M4wXvLU3uuP4e0pJ/n8VVMdROKxWlDMWiroTGr4U6kijAqsrIAwvfP8AQWSgneBolH5HyMk6WFjBVXX311IXQtKL6PoGAhDoRaC/CwtcJWzQRDJFXK2TMY2R2TYfrAofPMaJjNUu+YCi7WvO4cmMdzk1qrEkRcpbHmlxINd8wCTw/Dh4x/PKqHm0tuMrYohV1qUMn8EGPu6ERMjjZkx6T5spUnGQIq2OkVSyHKVSkj8wSpOgL7WCUESrJ9J69LvSuZNvIsky/g24c5TM7+YuZMyMDqp3K+3TQVfI3K1XXXuslvnM5dFoOyCyxEKzKmtiIOqheUgfq2Z1i98w1uZAuvXJDrPAmvkNQHdXGDg2rZgpxQowYFW5vjQx0a8PRohR4yBk2L5Nsk6X7zaMMRgbAsOCJoY6Vwe0oPE1g==]]></Encrypt>
</xml>
XML;


$pc = new WXBizMsgCrypt($token, $encodingAesKey, $appId);

$msg = '';
$errCode = $pc->decryptMsg($msg_signature, $timestamp, $nonce, $data, $msg);

function xmlToArray($xml){
    libxml_disable_entity_loader(true);
    $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
    $val = json_decode(json_encode($xmlstring), true);
    return $val;
}
var_dump(xmlToArray($msg));die;
var_dump($msg);die;
if ($errCode == 0) {
    print("解密后: " . $msg . "\n");
} else {
    print($errCode . "\n");
}
