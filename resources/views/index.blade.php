@extends('layout.master')
@section('title', '贾军个人博客|首页')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('header-tab')
    @include('components.headerTab',['title'=>"index"])
@endsection
@section('custom-style')
    <link href="css/index.css" rel='stylesheet' type='text/css' />
@endsection
@section('content')
    <div class="banner-section">
        <h3 class="tittle">生活·技能 <i class="glyphicon glyphicon-home"></i></h3>
        <div class="banner">
            <div  class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <img src="images/1.jpg" class="img-responsive" alt="" />

                    </li>
                    <li>
                        <img src="images/2.jpg" class="img-responsive" alt="" />


                    </li>
                    <li>
                        <img src="images/3.jpg" class="img-responsive" alt="" />


                    </li>
                    <li>
                        <img src="images/3.jpg" class="img-responsive" alt="" />


                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--//banner-->
        <!--/top-news-->
        <div class="top-news">
            <h3 class="tittle">最近项目 <i class="glyphicon glyphicon-book"></i></h3>
            <div class="top-inner">
                <div class="col-md-6 top-text">
                    <a href="single.html"><img src="images/pic1.jpg" class="img-responsive" alt=""></a>
                    <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
                <div class="col-md-6 top-text">
                    <a href="single.html"><img src="images/pic2.jpg" class="img-responsive" alt=""></a>
                    <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                    <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
                <div class="col-md-6 top-text">
                    <a href="single.html"><img src="images/pic3.jpg" class="img-responsive" alt=""></a>
                    <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
                <div class="col-md-6 top-text two">
                    <a href="single.html"><img src="images/pic4.jpg" class="img-responsive" alt=""></a>
                    <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                    <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//top-news-->
    </div>

    <div class="banner-right-text">
        <h3 class="tittle">贾军  <i class="glyphicon glyphicon-user"></i></h3>
        <!--/general-news-->
        <div class="general-news">
            <div class="general-inner">
                <div class="general-text">
                    <a href="single.html"><img src="images/gen1.jpg" class="img-responsive" alt=""></a>
                    <h5 class="top"><a href="single.html">现工作于腾讯·深圳</a></h5>
                    <p>本科就读于南京理工大学，后保研到四川大学网络空间安全学院进修硕士研究生，期间发表学术论文两篇，参与第二代防火墙项目。酷爱编程，践行每天一点点代码都改变着世界一点点。</p>
                </div>
                <div class="edit-span">
                    <section>
                        <hr class="hidden-sm hidden-xs">
                        <h3 class="tittle media">标签 <i class="glyphicon  glyphicon-tag"></i></h3>
                        <div class="tags">
                            <a href="/tags/#生活" title="生活" rel="2">
                                生活
                            </a>
                            <a href="/tags/#Blog" title="Blog" rel="2">
                                Blog
                            </a>
                            <a href="/tags/#博客" title="博客" rel="1">
                                博客
                            </a>
                            <a href="/tags/#漫谈" title="漫谈" rel="1">
                                漫谈
                            </a>
                            <a href="/tags/#Mac" title="Mac" rel="3">
                                Mac
                            </a>
                            <a href="/tags/#终端" title="终端" rel="3">
                                终端
                            </a>
                            <a href="/tags/#Git" title="Git" rel="3">
                                Git
                            </a>
                            <a href="/tags/#Github" title="Github" rel="1">
                                Github
                            </a>
                            <a href="/tags/#iOS" title="iOS" rel="1">
                                iOS
                            </a>
                            <a href="/tags/#BJJ" title="BJJ" rel="1">
                                BJJ
                            </a>
                            <a href="/tags/#iptables" title="iptables" rel="2">
                                iptables
                            </a>
                            <a href="/tags/#MARK" title="MARK" rel="1">
                                MARK
                            </a>
                            <a href="/tags/#TC" title="TC" rel="1">
                                TC
                            </a>
                            <a href="/tags/#Centos" title="Centos" rel="1">
                                Centos
                            </a>
                            <a href="/tags/#pppoe" title="pppoe" rel="1">
                                pppoe
                            </a>
                            <a href="/tags/#TCP/UDP port" title="TCP/UDP port" rel="1">
                                TCP/UDP port
                            </a>
                            <a href="/tags/#Laravel5.4 lnmp" title="Laravel5.4 lnmp" rel="1">
                                Laravel5.4 lnmp
                            </a>
                        </div>
                    </section>
                </div>
                <div class="edit-pics">
                    <h3 class="tittle media">最近博客 <i class="glyphicon glyphicon-list-alt"></i></h3>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f4.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f1.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f4.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f4.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f4.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f4.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f1.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="images/f1.jpg" class="img-responsive" alt="">

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--//general-news-->
        <!--/news-->
        <!--/news-->
    </div>
    <div class="clearfix"> </div>
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('custom-script')
    <!--banner-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager:true,
                nav:true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
@endsection