@extends('layouts/main')


@section('content')
    <section id="show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/puma">{{$shoe->brand}}</a>
            <span>/</span>
            <span>{{$shoe->name}}</span>
        </div>
            <div class="inside">
                <div class="shoe-img">
                <img src="{{$shoe->image}}" alt="">
                </div>
                <div class="show-info">
                    <h3 class="brand">{{$shoe->brand}}</h3>
                    <div class="name">{{$shoe->name}}</div>
                    <div class="nickname">{{$shoe->nickname}}</div>
                    <div class="price">${{$shoe->price}}.00</div>
                    <div class="select">
                        <select name="" id="">
                            <option value="">size - 6 </option>
                            <option value="">size - 7</option>
                            <option value="">size - 8</option>
                            <option value="">size - 9</option>
                            <option value="">size - 10</option>
                            <option value="">size - 11</option>
                            <option value="">size - 12</option>
                            <option value="">size - 13</option>
                        </select>
                        <button class="submit">ADD TO CART</button>

                    </div>
                    <hr class="hr">
                    <div class="details">
                        <h3>Details</h3>
                    <p>{{$shoe->description}}</p>
                    </div>

                </div>
   
            </div>
    </section>
    <section id="extras">
        <h2 class='title'>You May Also Like </h2>
        <div class="container">
            <div class="owl-carousel owl-theme">
                @foreach($footwear as $shoe)
                <a href="/puma/{{$shoe->id}}">
                    <div class="item shoe">
                        <img src="{{$shoe->image}}" alt="">
                            <div class="details">
                                <p>{{$shoe->name}}</p>
                                <span>${{$shoe->price}}.00</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
           
    </section>


   
@endsection