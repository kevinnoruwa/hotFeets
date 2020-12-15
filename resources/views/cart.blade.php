@extends('layouts/main')

@section('content')
    <section id="cart">
        <div class="inside">
            <div class="items">
                <h4 class="header">Shopping Cart</h5>
                <ul>
                    <li>
                        <div class="container">
                            <div class="item-img">
                                <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D1200/media/catalog/product/5/5/554724-173_1.png" alt="">
                            </div>
                            <div class="item-details">
                                <h6>Yeezy Boost 380</h6>
                                <select name="" id="">
                                    <option value="">QTY: 1</option>
                                    <option value="">QTY: 2</option>
                                    <option value="">QTY: 3</option>
                                    <option value="">QTY: 4</option>
                                    <option value="">QTY: 5</option>
                                    <option value="">QTY: 6</option>
                                    <option value="">QTY: 7</option>
                                    <option value="">QTY: 8</option>
                                    <option value="">QTY: 8</option>
                                    <option value="">QTY: 9</option>
                                </select>
                                <span class="highlight">Delete</span>
                            </div>
                            <div class="item-price">
                                <span class="highlight">$152</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="item-img">
                                <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D1200/media/catalog/product/5/5/554724-173_1.png" alt="">
                            </div>
                            <div class="item-details">
                                <h6>Yeezy Boost 380</h6>
                                <select name="" id="">
                                    <option value="">QTY: 1</option>
                                    <option value="">QTY: 2</option>
                                    <option value="">QTY: 3</option>
                                    <option value="">QTY: 4</option>
                                    <option value="">QTY: 5</option>
                                    <option value="">QTY: 6</option>
                                    <option value="">QTY: 7</option>
                                    <option value="">QTY: 8</option>
                                    <option value="">QTY: 8</option>
                                    <option value="">QTY: 9</option>
                                </select>
                                <span class="highlight">Delete</span>
                            </div>
                            <div class="item-price">
                                <span class="highlight">$152</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="total-box">
                <span>Subtotal(2 items): 
                    <span class="highlight">$152</span>
                </span>
                <button class="btn-submit">Proceed to Buy</button>
            </div>
        </div>
    </section>
    

@endsection