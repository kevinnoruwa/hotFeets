@extends('layouts/main')


@section('content')
    <section id="apparel-show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/apparel">Apparel</a>
            <span>/</span>
            <span>{{$cloth->name}}</span>
        </div>
            <div class="inside">
                <div class="shoe-img">
                <img src="{{$cloth->image}}" alt="">
                </div>
                <div class="show-info">
                    <h3 class="brand">{{$cloth->brand}}</h3>
                    <div class="name">{{$cloth->name}}</div>
                    <div class="nickname">{{$cloth->nickname}}</div>
                    <div class="price">${{$cloth->price}}.00</div>
                    <div class="select">
                        <select name="" id="">
                            <option value="">size - SM</option>
                            <option value="">size - MD</option>
                            <option value="">size - LG</option>
                        </select>
                        <button class="submit">ADD TO CART</button>
                    </div>
                    <hr class="hr">
                    <div class="details">
                        <h3>Details</h3>
                    <p>{{$cloth->description}}</p>
                    </div>

                </div>
   
            </div>
    </section>
    {{-- <section id="extras">
        <h2 class='title'>You May Also Like </h2>
        <div class="container">
            <div class="owl-carousel owl-theme">
                @foreach($footwear as $cloth)
                <a href="/new-arrivals/{{$cloth->id}}">
                    <div class="item shoe">
                        <img src="{{$cloth->image}}" alt="">
                            <div class="details">
                                <p>{{$cloth->name}}</p>
                                <span>${{$cloth->price}}.00</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
           
    </section> --}}


   
@endsection