@extends('layouts/main')


@section('content')
    <section id="extra-show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/extras">{{$extras->brand}}</a>
            <span>/</span>
            <span>{{$extras->name}}</span>
        </div>
            <div class="inside">
                <div class="shoe-img">
                <img src="{{$extras->image}}" alt="">
                </div>
                <div class="show-info">
                    <h3 class="brand">{{$extras->brand}}</h3>
                    <div class="name">{{$extras->name}}</div>
                    <div class="nickname">{{$extras->nickname}}</div>
                    <div class="price">${{$extras->price}}.00</div>
                    <div class="select">
                        <button class="submit">ADD TO CART</button>

                    </div>
                    <hr class="hr">
                    <div class="details">
                        <h3>Details</h3>
                    <p>{{$extras->description}}</p>
                    </div>

                </div>
   
            </div>
    </section>
   

   
@endsection