@extends('layout')



@section('workspace-content')


@section('header')
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{Request::path() === '/' ? 'current_page_item':''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{Request::path() === 'clients' ? 'current_page_item':''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li class="{{Request::path() === 'about' ? 'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="{{Request::path() === 'Articles' ? 'current_page_item':''}}"><a href="#" accesskey="4" title="">Articles</a></li>
                    <li class="{{Request::path() === 'contact' ? 'current_page_item':''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection


<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Welcome to our articles page</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>

        </div>
        <div id="sidebar">

            @foreach($articl as $articles)
                <ul class="style1">
                    <li class="first">
                        <h3>
                            <a href="articles/{{ $articles->id }}"> {{$articles->title}}</a>
                        </h3>
                        <p>{{$articles->excerpt}}</p>
                    </li>
                </ul>
            @endforeach


        </div>
    </div>
</div>


@endsection
