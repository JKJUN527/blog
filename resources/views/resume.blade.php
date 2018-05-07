@extends('layout.master')
@section('title', '贾军个人博客|个人简历')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('header-tab')
    @include('components.headerTab',['title'=>"resume"])
@endsection
@section('custom-style')
    <link href="css/index.css" rel='stylesheet' type='text/css' />
@endsection
@section('content')
    <p>个人简历</p>
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('custom-script')
    <script>

    </script>
@endsection