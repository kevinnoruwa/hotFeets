@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Adidas</h2>
                <p>The brand with the 3 stripes </p>
            </div>
            <div class="shoe-img">
                <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D1440/media/catalog/category/SG_header_adidas_1_.png" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Adidas</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($shoes as $shoe)
                <a href="/adidas/{{$shoe->id}}">
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