@extends('app')

@section('title','記事更新')

@section('content')
  @include('nav')
  <div class="container">
      @include('articles.card')
  </div>
@endsection