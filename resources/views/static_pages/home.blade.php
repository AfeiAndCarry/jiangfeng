@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
    <h1>主页</h1>
    <p class="lead">
        你现在看到的是<a href=" https://peaceful-reaches-80361.herokuapp.com/">jiangfeng的主页</a>
    </p>
  <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
  </p>
    </div>
    @stop