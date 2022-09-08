@extends('layouts.home-template')

@section('header')

    <link rel="stylesheet" href="{{ asset('css/lojadepontos.css') }}">

@endsection

@section('content')

<div class="main-container">
                <div class="cardd">
                    <div class="product-card">
                        <div class="logo-cart">
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        <div class="main-images">
                        <!--<img id="blue" class="blue active" src="images/recesso.png" alt="blue">-->
                        </div>
                        <div class="shoe-details">
                            <span class="shoe_name">3 dias de recesso</span>
                            <p>Desbloqueie esse prêmio e adquira 3 dias seguidos de folga!</p>
                        </div>
                        <div class="color-price">
                            <div class="price">
                                <span class="price_num">200</span>
                                <span class="price_letter">Pontos</span>
                            </div>
                        </div>
                        <button class="btn2">Adquirir prêmio</button>
                    </div>

                    <div class="product-card">
                        <div class="logo-cart">
                            <!--<img src="images/logo.jpg" alt="logo">-->
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        <div class="main-images"></div>
                        <div class="shoe-details">
                            <span class="shoe_name">Vale compras</span>
                            <p>Desbloqueie esse prêmio e adquira Vale compras!</p>
                        </div>
                        <div class="color-price">
                            <div class="price">
                                <span class="price_num">500</span>
                                <span class="price_letter">Pontos</span>
                            </div>
                        </div>
                        <button class="btn2">Adquirir prêmio</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
