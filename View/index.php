<?php
    function __autoload($className) {    //$className就是类名
        $filename = "../Controller/". $className .".class.php";    //组合路径
        require_once "$filename";    //引入类文件
    }

    $test =new IndexController();
    echo $test->handleOpenId(); 
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--在移动端按比例缩放-->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no;">

    <!--<script type='text/javascript' src='__PUBLIC__/js/jquery-1.11.3.js' charset='utf-8'></script>
    <script>var Zepto = jQuery</script>-->
    <link rel="stylesheet" href="../Public/css/swiper.min.css">
    <link rel="stylesheet" href="../Public/css/index.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->
    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<body>
<!--判断是否要显示过渡图片-->
<script type="text/javascript" src="../Public/js/loadScreen.js"></script>

<!--背景图片-->
<main>
    <div class="swiper-pagination1 space-point"></div>
    <div class="swiper-container1" style="height: 100%;z-index: -1;">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg1.png">
            </div>
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg2.png">
            </div>
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg3.png">
            </div>
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg4.png">
            </div>
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg5.png">
            </div>
            <div class="swiper-slide slide-bg" onclick='location.href="#"'>
                <img src="../Public/images/bg6.png">
            </div>
        </div>
    </div>
</main>

<!--底部菜单（public）-->
<div class="bottom-menu">
    <div class="item-pointSer">
        <img class="btn-pointer" data-status="off" src="../Public/icons/pointI.png">
    </div>
    <ul>
        <li id="btn-index"><div><img src="../Public/icons/home.png" alt="">首頁</div></li>
        <li id="btn-display" onclick='location.href="abstract.html"'><div><img src="../Public/icons/ripe.png" alt="">陳列架</div></li>
        <li id="btn-service" data-order="off"><div><img src="../Public/icons/service.png" alt="">客服</div></li>
        <li id="btn-personal" data-order="off"><div><img src="../Public/icons/user.png" alt="">個人</div></li>
    </ul>
</div>

<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript" src="../Public/js/getPublicHtml.js"></script><!--public-->
<script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
<script type="text/javascript" src="../Public/js/public.js"></script>
<script type="text/javascript">
    /*背景图片的轮播*/
    var mySwiper1 = new Swiper('.swiper-container1',{
        pagination : '.swiper-pagination1',
        loop: true
    });
    /*过渡图片的淡出*/
    $(window).load(function(){
        setTimeout(function(){
            $(".item-logo,.item-list").fadeIn(1000);
        },500);
        setTimeout(function(){
            $("#board-transit").fadeOut(1000);
        },2000);
    });
</script>
</body>
</html>