@extends('layouts.default')
@section('content')
 <form method="post" action="{{route('users.store')}}">
     <div class="form-group">
         @include('shared._errors')
         <label for="name">名称</label>
         <input type="text" name="name" class="form-control" value="{{old('name')}}">
         <label for="email">邮箱</label>
         <input type="text" name="email" class="form-control" value="{{old('email')}}">
         <label for="password">密码</label>
         <input type="text" name="password" class="form-control" value="{{old('password')}}">
         <label for="password-confirmed">确认密码</label>
         <input type="text" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
         {{csrf_field()}}
         <input  class="btn-default btn" type="submit" value="提交">
     </div>
 </form>
  @stop