<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="plugins/sweetalert/sweetalert.css" rel='stylesheet' type='text/css' />
    <script src="plugins/sweetalert/sweetalert.min.js"> </script>
    <script src="js/jquery.min.js"> </script>
    <!--/script-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    @section('custom-style')
    @show

</head>
<body>
@section('header-nav')
@show
<div class="full">
    <div class="col-md-3 top-nav">
        @section('header-tab')
        @show
    </div>
    <div class="col-md-9 main">
        @section('content')
        @show

        @section('footer')
        @show
    </div>
</div>
<!--start-smooth-scrolling-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
    $(".fb").click(function () {
        swal({
            title: '',
            text: '微信二维码',
            imageUrl: '{{asset('images/wechat.jpg')}}',
            imageSize: "300x300",
            animation: true, //控制是否有动画
            confirmButtonText: '扫码立即添加好友',
            confirmButtonColor: '#4cd964',
        })
    });
    $(".twitt").click(function () {
        swal({
            title: '',
            text: 'QQ二维码',
            imageUrl: '{{asset('images/qq.jpg')}}',
            imageSize: "300x300",
            animation: true, //控制是否有动画
            confirmButtonText: '扫码立即添加好友',
            confirmButtonColor: '#4cd964',
        })
    });
</script>
@section('custom-script')
@show
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>