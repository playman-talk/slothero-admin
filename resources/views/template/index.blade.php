@extends('layout.common')
@section('title', 'ページタイトル')

@section('page_css')
  <!-- このページ用のcssを記入  -->
  <link href="/css/xxx.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@include('layout.sidebar')
@section('content')
  <p>ここにコンテンツを記入</p>
@endsection
 
@section('page_js')
  <!-- このページ用のcssを記入  -->
  <script src="/js/xxx.js"></script>
@endsection
 
@include('layout.footer')
