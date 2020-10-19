@extends('layout')



@section('content')




<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Welcome to our articles page</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>


        <!--<div id="sidebar">-->

            @foreach($articl as $artic)
                <ul class="style1">
                    <li class="first">
                        <h3>
                            <a href="articles/{{ $artic->id }}"> {{$artic->title}}</a>
                        </h3>

                        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

                        <p>{{$artic->excerpt}}</p>
                    </li>
                </ul>
            @endforeach
        </div>
        </div>
    </div>
</div>


@endsection
