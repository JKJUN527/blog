<div class="logo">
    <a href="index.html"><h1>JK.JUN</h1></a>
</div>
<div class="top-menu">
    <span class="menu"> </span>

    <ul class="cl-effect-16">
        <li><a @if($title == "index") class="active" @endif href="/">首页</a></li>
        <li><a @if($title == "resume") class="active" @endif href="/resume" >简历</a></li>
        <li><a @if($title == "project") class="active" @endif href="/project">项目</a></li>
        <li><a @if($title == "blog") class="active" @endif href="/blog" >博客</a></li>
        <li><a @if($title == "pictures") class="active" @endif href="/pictures">相册</a></li>
        <li><a @if($title == "contract") class="active" @endif href="/contract">留言</a></li>
    </ul>
    <!-- script-for-nav -->
    <script>
        $( "span.menu" ).click(function() {
            $( ".top-menu ul" ).slideToggle(300, function() {
                // Animation complete.
            });
        });
    </script>
    <!-- script-for-nav -->
    <ul class="side-icons">
        <li><a class="fb"></a></li>
        <li><a class="twitt"></a></li>
        <li><a class="goog" href="https://weibo.com/2841130534/profile?rightmod=1&wvr=6&mod=personinfo" target="_blank"></a></li>
        <li><a class="drib" href="https://github.com/JKJUN527" target="_blank"></a></li>
    </ul>
</div>