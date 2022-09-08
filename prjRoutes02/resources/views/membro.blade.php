@extends('layouts.home-template')

@section('header')

    <link rel="stylesheet" href="{{ asset('css/membro.css') }}">

@endsection

@section('content')

<div class="main-container">
          <div class="cardd">

            <ul class="cards">
              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/kaylane2.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Kaylane Costa</h2>
                    <p class="card_text">JavaScript Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
                  </div>
                </div>
              </li>

              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/cleane2.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Cleane Batista</h2>
                    <p class="card_text">Back-End Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
                  </div>
                </div>
              </li>

              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/werneck2.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Larissa Soares</h2>
                    <p class="card_text">C# Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
                  </div>
                </div>
              </li>

              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/gustavo2.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Gustavo Silva</h2>
                    <p class="card_text">ReactJS Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
                  </div>
                </div>
              </li>

              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/AvatarMaker.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Danilo Santos</h2>
                    <p class="card_text">Python Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
                  </div>
                </div>
              </li>

              <li class="cards_item">
                <div class="card">
                  <div class="card_image"><img src="images/fernanda2.png"></img></div>
                  <div class="card_content">
                    <h2 class="card_title">Larissa Santos</h2>
                    <p class="card_text">PHP Developer</p>
                    <a href="/tarefas"><button class="btn card_btn">Tarefas</button></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection
