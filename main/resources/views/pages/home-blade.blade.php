@extends('layouts.main-layout')

@section('home')
    <h1>HOME</h1>
    <a href="{{route('blog-blade')}}">Blog</a>
    <a href="{{route('about-blade')}}">About</a>
@endsection