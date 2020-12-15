@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Appareal</h2>
                <p>Shop Hot Feets exclusive apparel collection </p>
            </div>
            <div class="shoe-img">
                <img src="https://fairware.com/wp/wp-content/uploads/2019/03/Screen-Shot-2019-03-22-at-4.38.55-PM.png" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Appareal</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($clothes as $cloth)
            <a href="/apparel/{{$cloth->id}}">
                <div class="shoe-box">
                    <div class="shoe-img">
                    <img src="{{$cloth->image}}" alt="">
                    </div>
                    <div class="details">
                        <div>{{$cloth->name}}</div>
                        <div>${{$cloth->price}}.00</div>
                    </div>
                </div>
            </a>
               
                @endforeach
            </div>
        </div>
    </section>
    

@endsection