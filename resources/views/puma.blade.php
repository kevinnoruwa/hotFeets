@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Puma</h2>
                <p>Puma shoes are always ready to pounce.</p>
            </div>
            <div class="shoe-img">
                <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D1440/media/catalog/category/SG_SUBcategory_FW_PUMA_082018.jpg" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Puma</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($shoes as $shoe)
            <a href="/puma/{{$shoe->id}}">
                <div class="shoe-box">
                    <div class="shoe-img">
                    <img src="{{$shoe->image}}" alt="">
                    </div>
                    <div class="details">
                        <div>{{$shoe->name}}</div>
                        <div>"{{$shoe->nickname}}"</div>
                        <div>${{$shoe->price}}.00</div>
                    </div>
                </div>
            </a>
             
                @endforeach
              
            </div>
        </div>
    </section>
    

@endsection