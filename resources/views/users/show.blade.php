@extends('layouts.default')
@section('title',$user->name)
@section('content')
    @include('shared._messages')
    {{$user->name}}--{{$user->email}}
    @stop