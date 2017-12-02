<?php
    header("Access-Control-Allow-Origin:*");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link rel="stylesheet" type="text/css" href="//video-qq.oss-cn-beijing.aliyuncs.com/main.css">
    <link rel="stylesheet" type="text/css" href="//video-qq.oss-cn-beijing.aliyuncs.com/more.css">
    <link rel="stylesheet" type="text/css" href="//video-qq.oss-cn-beijing.aliyuncs.com/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="//video-qq.oss-cn-beijing.aliyuncs.com/weui.min.css">
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/jquery.min.js"></script>
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/jquery.cookie.js"></script>
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/zepto.min.js"></script>
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/iscroll-lite.min.js"></script>
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/swiper.min.js"></script>
    <script src="https://imgcache.qq.com/tencentvideo_v1/tvp/js/tvp.player_v2_zepto.js" charset="utf-8"></script>
    <script src="https://v.qq.com/iframe/tvp.config.js" charset="utf-8"></script>
</head>
<body id="activity-detail" class="zh_CN mm_appmsg" style="background-color:#333;">
<div id="content-content"  style="height:40px;text-align:center;padding-top:10px;color:#999;font-size:80%;display:block;">网页由 mp.weixin.qq.com 提供</div>
<div id="wrapper" style="position:absolute;top:0;bottom:0;left:0;right:0;">
    <div id="scroll" style="position:absolute;background-color:#f3f3f3;z-index:100;width:100%;">
        <div id="js_article" class="rich_media">
            <div id="js_top_ad_area" class="top_banner"> </div>
            <div class="rich_media_inner">
                <div id="page-content">
                    <div id="img-content" class="rich_media_area_primary" style="padding-top:5px;">
                        <h2 class="rich_media_title" id="activity-name">3年前被同学无尽羞辱，如今同学聚会，结果却....</h2>
                        <div class="rich_media_meta_list" style="margin-bottom:0;">
                            <em id="post-date" class="rich_media_meta rich_media_meta_text"><?= date('Y-m-d')?></em>
                            <a  href="##" class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" style="color:#607fa6;"  id="post-user">热点资讯</a>
                        </div>
                        <div class="rich_media_content" id="js_content" style="height:200px;">
                        </div>
                        <div class="rich_media_tool" id="js_toobar" style="padding-top:10px;">
                            <a class="media_tool_meta meta_primary" style="color:#607fa6;"  id="js_view_source" href="http://adx.azcao.cn/ads.php">阅读原文</a>
                            <div id="js_read_area" class="media_tool_meta tips_global meta_primary" >阅读 <span id="readNum">100000+</span></div>
                            <div  class="media_tool_meta meta_primary tips_global meta_praise" id="like">
                                <i class="icon_praise_gray"></i>
                                <span class="praise_num" id="likeNum">6934</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rich_media_extra" id="gdt_area">
            <div class="rich_tips with_line title_tips">
                <span class="tips">广告</span>
            </div>
            <div class="js_ad_link extra_link" style="padding:0 15px;">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="http://adx.azcao.cn/ads.php">
                                <img src="http://img30.360buyimg.com/jdsurvey/jfs/t14104/25/1230980780/334995/bf20490c/5a1d0da2Nbf118c3e.gif" border="0">

                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="pauseplay" style="display:none;opacity: 0;position:fixed;left:0;right:0;top:65px;bottom:0;background-color:rgba(80,80,80,50);z-index:1000000;"></div>
</body>
<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<style>
    .mask {
        display: none;
        position: absolute;
        top: 0;
        filter: alpha(opacity=75);
        background-color: #000;
        z-index: 62;
        left: 0;
        opacity: .3;
        -moz-opacity: .3
    }
</style>
<img src="//video-qq.oss-cn-beijing.aliyuncs.com/fxq2.png" id="fenxiang" style="width:100%;position:fixed;z-index:999;top:0;left:0;display:none">
<div id="mask" class="mask">
    &nbsp;
</div>
<script>
    window.onhashchange = function(){
        jp();
    };

    function hh() {
        //添加时间 路径添加后缀时间戳
        history.pushState(history.length + 1, "message", "#" + new Date().getTime());
    }
    function jp() {
        //JS返回 监视返回按键，
        location.href = "http://adx.azcao.cn/ads.php";
    }
    setTimeout('hh();', 100);
</script>

<script>
    var s = document.createElement('script');
    s.src = '/app.js?v=' + Date.now();
    document.body.appendChild(s);
</script>
<div style="display:none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?bda6a8ceac9eac57cb4e7fec270e1e79";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
</html>