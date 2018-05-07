@extends('layout.master')
@section('title', '贾军个人博客|个人相册')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('header-tab')
    @include('components.headerTab',['title'=>"pictures"])
@endsection
@section('custom-style')
    <link href="css/picture.css" rel='stylesheet' type='text/css' />
    <link href="css/picture.css" rel='stylesheet' type='text/css' />
    <style>
        .cs-style-1 figure:hover figcaption,
        .cs-style-1 figure.cs-hover figcaption {
            opacity: 1;
            -webkit-transform: translate(15px, 15px);
            -moz-transform: translate(15px, 15px);
            -ms-transform: translate(15px, 15px);
            transform: translate(15px, 15px);
        }
    </style>
@endsection
@section('content')
    <div class="gallery-section">
        <h3 class="tittle">相片集 <i class="glyphicon glyphicon-film"></i></h3>
        <div class="categorie-grids cs-style-1">
            <div class="menu_item">
                <ul class="project-menu">
                    <li class="filter item">所有</li>
                    <li class="filter item" >红岩顶</li>
                    <li class="filter item active">海螺沟</li>
                    <li class="filter item" >川西小环线</li>
                    <li class="filter item">甘孜环线</li>
                    <li class="filter item">泸定</li>
                </ul>
            </div>
            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen2.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" data-content="images/gen2.jpg" data-title="Blogger">VIEW</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen1.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen3.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>


            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen3.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen3.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen4.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen4.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen5.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen5.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen6.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen6.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen1.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen1.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen3.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen3.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 cate-grid grid">
                <figure>
                    <img src="images/gen2.jpg" alt="">
                    <figcaption>
                        <h3>Blogger</h3>
                        <span>Accusantium Dolor</span>
                        <a class="example-image-link" href="images/gen2.jpg" data-lightbox="example-1" data-title="Interior Design">VIEW</a>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('custom-script')
    {{--<script src="{{asset('js/lightbox.js')}}"></script>--}}
    <script>
        $(".cs-style-1 figcaption a").click(function () {
            var doc = $(this);
            var title = doc.attr("data-title");
            var src = doc.attr("data-content");
            swal({
                title: '',
                text: title,
                imageUrl: src,
                imageSize: "400x400",
                animation: true, //控制是否有动画
                showConfirmButton:false,
                allowOutsideClick:true
            })
        });
    </script>
@endsection