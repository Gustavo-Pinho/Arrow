@extends('layouts.home-template')

@section('header')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection

@section('ranking')


   <!-- DASHBOARD -->
   <main>
               
                <div class="insights">
                <!-- SALES -->
                <div class="sales">
                    <span class="material-icons-sharp"> mood </span>
                    <div class="middle">
                    <div class="left">
                        <h3>Humor</h3>
                        <!-- MUDEI AQUI HOJE TB -->
                        <h1>Alegre</h1>
                    </div>
                    <div class="progress">
                        <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                        <p>81%</p>
                        </div>
                    </div>
                    </div>
                    <small class="text-muted"> Ver mais </small>
                </div>

                <!-- EXPENSES -->
                <div class="expenses">
                    <span class="material-icons-sharp"> comment </span>
                    <div class="middle">
                    <div class="left">
                        <h3>Feedback</h3>
                        <!-- MUDEI AQUI HOJE TB -->
                        <h1>13/20</h1>
                    </div>
                    <div class="progress">
                        <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <!--MUDEI AQUI HOJE-->
                        <div class="number">
                        <p>65%</p>
                        </div>
                    </div>
                    </div>
                    <small class="text-muted"> Ver mais </small>
                </div>

                <!-- INCOME -->
                <div class="income">
                <span class="material-symbols-outlined">
        work
        </span>
                    <div class="middle">
                    <div class="left">
                        <!-- MUDEI AQUI HOJE TB -->
                        <h3>Tarefas Entregues</h3>
                        <h1>5</h1>
                    </div>
                    <div class="progress">
                        <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                        <p>44%</p>
                        </div>
                    </div>
                    </div>
                    <small class="text-muted"> Ver mais </small>
                </div>
                </div>

                <div class="recent-orders">
                <h2>Ranking</h2>
                <table id="recent-orders--table">
                    <thead>
                    <tr>
                        <th>Posição</th>
                        <th>Membro</th>
                        <th>Pontos</th>
                        <th>Cargo Atual</th>
                        <th></th>
                  
                    </tr>
              @foreach ($pontos as $ponto)
              <tr>
                <td>{{ $ponto->pontos }}</td>
              </tr>
              @endforeach
            </thead>
          <a href="#">Show All</a>
        </div>
      </main>

          </div>
        </div>

        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/db.js') }}"></script>
    

@endsection
