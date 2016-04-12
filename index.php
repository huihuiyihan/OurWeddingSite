<?php
require_once "share/jssdk.php";
$jssdk = new JSSDK("wxf6a267997ada030e", "6180af097d8c819428433eeed342888b");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>付远征&周帆婚礼喜帖</title>
    <meta name="description" content="一场空前盛大的婚礼即将上演，2015年10月3日欢迎参加付远征&周帆婚礼" />

    <link rel="stylesheet" href="parallax.css"/>
    <link rel="stylesheet" href="parallax-animation.css"/>
    <style>
        *{margin:0;padding:0;}
        html,body{height:100%;}
        body{font-size:14px;color:#6e6d6d;font-family: "微软雅黑", Arial;background:#751007;}
        body:after{content:"加载中...";width:100%;position:absolute;left:0;top:50%;height:40px;line-height:40px;margin-top: -20px;text-align:center;color:#e1c28c;font-size:22px;}
        ul,ol,li,dl,dt,dd{list-style:none;}
        .wrapper{opacity:0;}
        .show .wrapper{opacity:1;}
        body.show:after{display:none;}
        /**
 * Swiper 3.1.2
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 *
 * http://www.idangero.us/swiper/
 *
 * Copyright 2015, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 *
 * Licensed under MIT
 *
 * Released on: August 22, 2015
 */
        .swiper-container{margin:0 auto;position:relative;overflow:hidden;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{-webkit-box-orient:vertical;-moz-box-orient:vertical;-ms-flex-direction:column;-webkit-flex-direction:column;flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.swiper-container-android .swiper-slide,.swiper-wrapper{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-o-transform:translate(0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-container-multirow>.swiper-wrapper{-webkit-box-lines:multiple;-moz-box-lines:multiple;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{-webkit-transition-timing-function:ease-out;-moz-transition-timing-function:ease-out;-ms-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex:0 0 auto;flex-shrink:0;width:100%;height:100%;position:relative}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-wp8-horizontal{-ms-touch-action:pan-y;touch-action:pan-y}.swiper-wp8-vertical{-ms-touch-action:pan-x;touch-action:pan-x}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:27px;height:44px;margin-top:-22px;z-index:10;cursor:pointer;-moz-background-size:27px 44px;-webkit-background-size:27px 44px;background-size:27px 44px;background-position:center;background-repeat:no-repeat}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");left:10px;right:auto}.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");right:10px;left:auto}.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-pagination{position:absolute;text-align:center;-webkit-transition:300ms;-moz-transition:300ms;-o-transition:300ms;transition:300ms;-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-pagination-bullet{width:8px;height:8px;display:inline-block;border-radius:100%;background:#000;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;box-shadow:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-white .swiper-pagination-bullet{background:#fff}.swiper-pagination-bullet-active{opacity:1;background:#007aff}.swiper-pagination-white .swiper-pagination-bullet-active{background:#fff}.swiper-pagination-black .swiper-pagination-bullet-active{background:#000}.swiper-container-vertical>.swiper-pagination{right:10px;top:50%;-webkit-transform:translate3d(0,-50%,0);-moz-transform:translate3d(0,-50%,0);-o-transform:translate(0,-50%);-ms-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0)}.swiper-container-vertical>.swiper-pagination .swiper-pagination-bullet{margin:5px 0;display:block}.swiper-container-horizontal>.swiper-pagination{bottom:10px;left:0;width:100%}.swiper-container-horizontal>.swiper-pagination .swiper-pagination-bullet{margin:0 5px}.swiper-container-3d{-webkit-perspective:1200px;-moz-perspective:1200px;-o-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-ms-transform-style:preserve-3d;transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:-webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-coverflow .swiper-wrapper{-ms-perspective:1200px}.swiper-container-fade.swiper-container-free-mode .swiper-slide{-webkit-transition-timing-function:ease-out;-moz-transition-timing-function:ease-out;-ms-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube{overflow:visible}.swiper-container-cube .swiper-slide{pointer-events:none;visibility:hidden;-webkit-transform-origin:0 0;-moz-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%;z-index:1}.swiper-container-cube.swiper-container-rtl .swiper-slide{-webkit-transform-origin:100% 0;-moz-transform-origin:100% 0;-ms-transform-origin:100% 0;transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0;width:100%;height:100%;background:#000;opacity:.6;-webkit-filter:blur(50px);filter:blur(50px);z-index:0}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;-webkit-transform-origin:50%;-moz-transform-origin:50%;transform-origin:50%;-webkit-animation:swiper-preloader-spin 1s steps(12,end) infinite;-moz-animation:swiper-preloader-spin 1s steps(12,end) infinite;animation:swiper-preloader-spin 1s steps(12,end) infinite}.swiper-lazy-preloader:after{display:block;content:"";width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-position:50%;-webkit-background-size:100%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}@-webkit-keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg)}}@keyframes swiper-preloader-spin{100%{transform:rotate(360deg)}}






		section[data-id="1"]{background:url(images/red_bg.jpg) no-repeat center top;background-size:cover;}

        section[data-id="1"] .box1 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p1_1.png) no-repeat center center;background-size: contain;
        }
        section[data-id="1"] .box2 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p1_2.png) no-repeat center center;background-size: contain;
        }
        section[data-id="1"] .box3 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p1_3.png) no-repeat center center;background-size: contain;
        }
        section[data-id="1"] .box4 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p1_4.png) no-repeat center center;background-size: contain;
        }



        section[data-id="2"]{background:#fff;}
        section[data-id="2"] .box1 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p2_1.png) no-repeat center center;background-size: contain;
        }
        section[data-id="2"] .box2 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p2_2.png) no-repeat center center;background-size: contain;
        }
        section[data-id="2"] .box3 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p2_3.png) no-repeat center center;background-size: contain;
        }
        section[data-id="2"] .box4 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p2_4.png) no-repeat center center;background-size: contain;
        }


        section[data-id="3"] .box1 {
            position: absolute;left: 33.3%; top: 9.8%;width:33.4%;height:18.75%;background:url(images/p3_logo.png) no-repeat center center;background-size: contain;
        }
        section[data-id="3"] .box2 {
            position: absolute;left: 0; top: 32.8%;width:100%;height:35.1%;background:url(images/p3_2.png) no-repeat center center;background-size: contain;
        }
        section[data-id="3"] .box3 {
            position: absolute;left: 19.6%; top: 69.6%;width:60.8%;height:7.3%;background:url(images/p3_btn.png) no-repeat center center;background-size:contain;
        }
        section[data-id="3"] .box3 a{
            display:block;width:100%;height:100%;
        }
        section[data-id="3"] .box4 {
            position: absolute;left: 24.8%; top: 80.4%;width:50.4%;height:15.9%;background:url(images/p3_4.png) no-repeat center center;background-size: contain;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        section[data-id="4"] {
            background:#fff;
        }

        section[data-id="4"] .box1 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p4_1.png) no-repeat center center;background-size: contain;
        }
        section[data-id="4"] .box2 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p4_2.png) no-repeat center center;background-size: contain;
        }
        section[data-id="4"] .box3 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p4_3.png) no-repeat center center;background-size: contain;
        }
        section[data-id="4"] .box4 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p4_4.png) no-repeat center center;background-size: contain;
        }
        section[data-id="4"] .box4 a{display:block;width:100%;height:100%;}


        section[data-id="5"]{background:url(images/red_bg.jpg) no-repeat center top;background-size:cover;}
        section[data-id="5"] .box1 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p5_1.png) no-repeat center center;background-size: contain;
        }
        section[data-id="5"] .box2 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p5_2.png) no-repeat center center;background-size: contain;
        }
        section[data-id="5"] .box3 {
            position: absolute;left: 0; top: 0;width:100%;height:100%;background:url(images/p5_3.png) no-repeat center center;background-size: contain;
        }
        section[data-id="5"] .box4{position:absolute;width:100%;height:50px;line-height:50px;text-align: center;color:#e1c18b;font-size:24px;background:#fff;bottom:0;left:0;}

        select{-webkit-appearance:none;}
        .bm_box{position:absolute;z-index:99;left:0;top:100%;width:100%;height:100%;background:url(images/form_tit.png) no-repeat center top #fff;background-size:contain;opacity:0;    -webkit-transition: all 400ms ease-in-out;transition: all 400ms ease-in-out;}
        .bm_box.show{top:0;opacity:1;}
        .bm_box .bm_main{width:260px;height:200px;position:absolute;top:50%;margin-top:-100px;left:50%;margin-left:-130px;}
        .bm_box ul li{height:28px;margin-bottom:10px;border:1px solid #e1c18b;}
        .bm_box ul li input, .bm_box ul li select{height:28px;width:100%;border:0 none;text-indent: 10px; }
        .bm_box button{height:30px;line-height:30px;text-align: center;width:100%;border:0 none;color:#e1c18b;background:#e71f02;}

        .close_bm{position:absolute;right:10px;top:10px;width:26px;height:26px;background:url(images/close_form.png) no-repeat center center;background-size:contain;}


         /*设置音乐*/
        .icon_audio{background: url("http://benin221.com/wp-content/uploads/2015/09/on_off.png") no-repeat; background-size: 100% 100%; width:24px; height:24px; position:absolute; z-index: 999; top:8%; right:6%; }

        .border_anim .icon_audio_anim{
            display:block;
            width:8px; height:8px;
            position:absolute;
            background:url("http://benin221.com/wp-content/uploads/2015/09/icon_audio_sign.png") no-repeat;
            background-size: 100% 100%;
            -webkit-animation:audio_anim 2s ease-out infinite;
            -moz-animation:audio_anim 2s ease-out infinite;
            -o-animation:audio_anim 2s ease-out infinite;
            opacity:0;
        }
        .border_anim .iconaudio1, .border_anim .iconaudio2, .border_anim .iconaudio3{ position:relative; display:block; }
        .border_anim .iconaudio1{
            -webkit-transform:rotate(0deg);
            -moz-transform:rotate(0deg);
            -o-transform:rotate(0deg);
        }
        .border_anim .iconaudio2{
            -webkit-transform:rotate(30deg);
            -moz-transform:rotate(30deg);
            -o-transform:rotate(30deg);
        }
        .border_anim .iconaudio3{
            -webkit-transform:rotate(45deg);
            -moz-transform:rotate(45deg);
            -o-transform:rotate(45deg);
        }
        .border_anim .iconaudio2 .icon_audio_anim{
            -webkit-animation-duration:2s;
            -webkit-animation-delay:.9s;
            -moz-animation-duration:2s;
            -moz-animation-delay:.9s;
            -o-animation-duration:2s;
            -o-animation-delay:1.9s;
        }
        .border_anim .iconaudio3 .icon_audio_anim{
            -webkit-animation-duration:2s;
            -webkit-animation-delay:1.9s;
            -moz-animation-duration:2s;
            -moz-animation-delay:.9s;
            -o-animation-duration:2s;
            -o-animation-delay:1.9s;
        }

        @-webkit-keyframes audio_anim {
            0% { -webkit-transform:translate(0,0); opacity:0; }
            30% { -webkit-transform:translate(-20px,-20px); opacity:1; }
            100% { -webkit-transform:translate(-30px,-30px); opacity:0; }
        }

        @-webkit-keyframes auto_scale {
            0% { -webkit-transform:scale(1,1); opacity:0;}
            20% {-webkit-transform:scale(1,1); opacity:0;}
            40% { -webkit-transform:scale(1,1); opacity:0;}
            60% { -webkit-transform:scale(1,1); opacity:0;}
            80% { -webkit-transform:scale(1,1); opacity:1;}
            100% { -webkit-transform:scale(2.5,2.5); opacity:0;}
        }


        @-webkit-keyframes light1 {
            0% { top:-250px; left:350px; opacity:0; }
            20% { top:-250px; left:350px; opacity:0; }
            10% { top:-250px; left:350px; opacity:0; }
            30% { top:-250px; left:350px; opacity:0; }
            40% { top:-250px; left:350px; opacity:0; }
            50% { top:-250px; left:350px; opacity:0; }
            60% { top:-250px; left:350px; opacity:0; }
            70% { top:-250px; left:350px; opacity:0; }
            80% { top:0px; left:100px; opacity:0.5;}
            90% { top:250px; left:-150px; opacity:1;}
            100% { top:500px; left:-400px; opacity:0;}
        }
        @-webkit-keyframes light2 {
            0% { top:-250px; left:450px; opacity:0; }
            20% { top:-250px; left:450px; opacity:0; }
            10% { top:-250px; left:450px; opacity:0; }
            30% { top:-250px; left:450px; opacity:0; }
            40% { top:-250px; left:450px; opacity:0; }
            50% { top:-250px; left:450px; opacity:0; }
            60% { top:-250px; left:450px; opacity:0; }
            70% { top:-250px; left:450px; opacity:0; }
            80% { top:0px; left:200px; opacity:0.5;}
            90% { top:250px; left:-50px; opacity:1;}
            100% { top:500px; left:-300px; opacity:0;}
        }
        @-webkit-keyframes light3{
            0% { top:-250px; left:550px; opacity:0; }
            20% { top:-250px; left:550px; opacity:0; }
            10% { top:-250px; left:550px; opacity:0; }
            30% { top:-250px; left:550px; opacity:0; }
            40% { top:-250px; left:550px; opacity:0; }
            50% { top:-250px; left:550px; opacity:0; }
            60% { top:-250px; left:550px; opacity:0; }
            70% { top:-250px; left:550px; opacity:0; }
            80% { top:0px; left:300px; opacity:0.5;}
            90% { top:250px; left:50px; opacity:1;}
            100% { top:500px; left:-200px; opacity:0;}
        }

        @-webkit-keyframes light4{
            0% { top:-250px; left:500px; opacity:0; }
            20% { top:-250px; left:500px; opacity:0; }
            10% { top:-250px; left:500px; opacity:0; }
            30% { top:-250px; left:500px; opacity:0; }
            40% { top:-250px; left:500px; opacity:0; }
            50% { top:-250px; left:500px; opacity:0; }
            60% { top:-250px; left:500px; opacity:0; }
            70% { top:-250px; left:500px; opacity:0; }
            80% { top:0px; left:250px; opacity:0.5;}
            90% { top:250px; left:0px; opacity:1;}
            100% { top:500px; left:-250px; opacity:0;}
        }

        @-webkit-keyframes light5{
            0% { top:-250px; left:650px; opacity:0; }
            20% { top:-250px; left:650px; opacity:0; }
            10% { top:-250px; left:650px; opacity:0; }
            30% { top:-250px; left:650px; opacity:0; }
            40% { top:-250px; left:650px; opacity:0; }
            50% { top:-250px; left:650px; opacity:0; }
            60% { top:-250px; left:650px; opacity:0; }
            70% { top:-250px; left:650px; opacity:0; }
            80% { top:0px; left:400px; opacity:0.5;}
            90% { top:250px; left:150px; opacity:1;}
            100% { top:500px; left:-100px; opacity:0;}
        }

        @-webkit-keyframes light6{
            0% { top:-250px; left:400px; opacity:0; }
            20% { top:-250px; left:400px; opacity:0; }
            10% { top:-250px; left:400px; opacity:0; }
            30% { top:-250px; left:400px; opacity:0; }
            40% { top:-250px; left:400px; opacity:0; }
            50% { top:-250px; left:400px; opacity:0; }
            60% { top:-250px; left:400px; opacity:0; }
            70% { top:-250px; left:400px; opacity:0; }
            80% { top:0px; left:150px; opacity:0.5;}
            90% { top:250px; left:-100px; opacity:1;}
            100% { top:500px; left:-350px; opacity:0;}
        }

        @-webkit-keyframes light7{
            0% { top:-250px; left:600px; opacity:0; }
            20% { top:-250px; left:600px; opacity:0; }
            10% { top:-250px; left:600px; opacity:0; }
            30% { top:-250px; left:600px; opacity:0; }
            40% { top:-250px; left:600px; opacity:0; }
            50% { top:-250px; left:600px; opacity:0; }
            60% { top:-250px; left:600px; opacity:0; }
            70% { top:-250px; left:600px; opacity:0; }
            80% { top:0px; left:350px; opacity:0.5;}
            90% { top:250px; left:100px; opacity:1;}
            100% { top:500px; left:-150px; opacity:0;}
        }


    </style>
</head>
<body>
<div style="height:0px;overflow:hidden;"><audio src="http://benin221.com/wp-content/uploads/2015/09/luv_letter.mp3" loop="loop" autoplay></audio></div>
<a href="javascript:playPause();">
    <div class="icon_audio border_anim">
        <span class="iconaudio1"><s class="icon_audio_anim"></s></span>
        <span class="iconaudio2"><s class="icon_audio_anim"></s></span>
        <span class="iconaudio3"><s class="icon_audio_anim"></s></span>
    </div>
</a>
<div class="wrapper">
    <div class="pages">
        <!-- 第一屏 -->
        <section class="page">
            <div class="box1" data-animation="followSlideToTop" data-duration="800" data-timing-function="ease-out"></div>
            <div class="box2" data-animation="followSlideToTop" data-delay="200" data-duration="800" data-timing-function="ease-out"></div>
            <div class="box3" data-animation="followSlideToTop" data-delay="400" data-duration="800" data-timing-function="ease-out"></div>
            <div class="box4" data-animation="followSlideToTop" data-delay="600" data-duration="800" data-timing-function="ease-out"></div>
        </section>
        <!-- 第二屏 -->
        <section class="page">
            <div class="box1" data-animation="followSlide" data-duration="1000"></div>
            <div class="box2" data-animation="followSlide" data-delay="200" data-duration="1000"></div>
            <div class="box3" data-animation="followSlide" data-delay="400" data-duration="1000"></div>
            <div class="box4" data-animation="followSlide" data-delay="600" data-duration="1000"></div>
        </section>
        <!-- 第三屏 -->
        <section class="page">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(img/1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/4.jpg)"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>

        </section>
        <!-- 第四屏 -->
        <section class="page">
            <div class="box1" data-animation="followSlide" data-duration="1000"></div>
            <div class="box2" data-animation="followSlide" data-delay="200" data-duration="1000"></div>
            <div class="box3" data-animation="followSlide" data-delay="400" data-duration="1000"></div>
            <div class="box4" data-animation="followSlide" data-delay="600" data-duration="1000">
                <a href="http://api.map.baidu.com/marker?location=34.231789,108.938903&title=酒店地址&content=雁塔区含光南路南段颐和宫大酒店&output=html"></a>
            </div>
        </section>
        <!-- 第五屏 -->
        <section class="page">
            <div class="box1" data-animation="followSlide" data-duration="1000"></div>
            <div class="box2" data-animation="followSlide" data-delay="200" data-duration="1000"></div>
            <div class="box3" data-animation="followSlide" data-delay="400" data-duration="1000"></div>
            <div class="box4" data-animation="followSlide" data-delay="600" data-duration="1000" id="open_bm">我要出席婚礼</div>

            <div class="bm_box">
                <div class="bm_main">
                <form method="post" action="a.php">
                    <ul>
                        <li><input type="text" placeholder="姓名" name="username"></li>
                        <li>
                            <select name="firends">
                                <option value="男方亲友">男方亲友</option>
                                <option value="女方亲友">女方亲友</option>
                            </select>
                        </li>
                        <li>
                            <select name="people" id="">
                                <option value="1">1人</option>
                                <option value="2">2人</option>
                                <option value="3">3人</option>
                                <option value="4">4人</option>
                            </select>
                        </li>
                        <li>
                            <select name="type" id="">
                                <option value="确认出席">确认出席</option>
                                <option value="待定">待定</option>
                            </select>
                        </li>
                    </ul>
                    <button type="button" id="sub_bm">
                    <input type="submit" value="提交" style="background:red;border:0px;">
                    </button>
                    
                </form>
                </div>
                <i class="close_bm" id="close_bm"></i>
            </div>
        </section>
    </div>
</div>
<script src="zepto.min.js"></script>
<script src="effect.parallax.js"></script>
<script src="swiper.min.js"></script>
<script>
    //音乐控件
    var myVideo = document.querySelector('audio');
    function playPause() {
        var myVideo = document.querySelectorAll('audio')[0];
        var music_btn = document.getElementById('music_btn');
        if (myVideo.paused){
            myVideo.play();
            $('.icon_audio').addClass('border_anim');
        }
        else{
            myVideo.pause();
            $('.icon_audio').removeClass('border_anim');
        }
    }




    myVideo.addEventListener('canplaythrough',function(){
        myVideo.play()
    },false)






    $(document).one("touchstart",function(e){
        myVideo.play();
    },false)



    window.onload=function(){
        $("body").addClass("show");
    }


    $(document).ready(function(){
        $('.pages').parallax({
            arrow: true,
            drag:false,
            loading: true
        });

        var swiper = new Swiper('.swiper-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 0,
            loop: true
        });

        $("#open_bm").tap(function(){
            $(".bm_box").addClass("show");
        })
        $("#close_bm").tap(function(){
            $(".bm_box").removeClass("show");
        })
    })



</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<script>
    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: '<?php echo $signPackage["timestamp"];?>',
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo'
        ]
    });
    var share={"tit":"付远征&周帆婚礼喜帖","desc":"2015年10月3日，欢迎大家来参加付远征&周帆的婚礼。","link":"","img":"http://benin221.com/wp-content/uploads/2015/09/royal.jpg"};
    wx.ready(function () {


        // 2. 分享接口
        // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口

        wx.onMenuShareAppMessage({
            title: share.tit,
            desc: share.desc,
            link: share.link,
            imgUrl: share.img,
            trigger: function (res) {
                // alert('用户点击发送给朋友');
            },
            success: function (res) {
                // alert('已分享');
                share_succ();
            },
            cancel: function (res) {
                // alert('已取消');
            },
            fail: function (res) {
                alert(JSON.stringify(res));
            }
        });

        // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口

        wx.onMenuShareTimeline({
            title: share.tit,
            link: share.link,
            imgUrl: share.img,
            trigger: function (res) {
                //alert('用户点击分享到朋友圈');
            },
            success: function (res) {
                //alert('已分享');
                share_succ();
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        });

        // 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareQQ({
            title: share.tit,
            desc: share.desc,
            link: share.link,
            imgUrl: share.img,
            trigger: function (res) {
                //alert('用户点击分享到QQ');
            },
            complete: function (res) {
                //alert(JSON.stringify(res));
            },
            success: function (res) {
                //alert('已分享');
                share_succ();
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        });

        // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
        wx.onMenuShareWeibo({
            title: share.tit,
            desc: share.desc,
            link: share.link,
            imgUrl: share.img,
            trigger: function (res) {
                //alert('用户点击分享到微博');
            },
            complete: function (res) {
                //alert(JSON.stringify(res));
            },
            success: function (res) {
                //alert('已分享');
                share_succ();
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        });
    });

</script>
</body>
</html>