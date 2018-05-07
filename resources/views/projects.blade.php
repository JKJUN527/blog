@extends('layout.master')
@section('title', '贾军个人博客|参与项目')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('header-tab')
    @include('components.headerTab',['title'=>"project"])
@endsection
@section('custom-style')
    <link href="css/index.css" rel='stylesheet' type='text/css' />
@endsection
@section('content')
    <p>参与项目</p>
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('custom-script')
    <script>
       
    </script>
@endsection