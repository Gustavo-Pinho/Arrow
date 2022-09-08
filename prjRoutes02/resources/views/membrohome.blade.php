<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
    <!-- loja de pontos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Cadastro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Home</title>
</head>
<body>
<div class="wrapper">
        <div class="header">
          <div class="header-menu">
            <div class="sidebar-btn">
              <i class="fas fa-bars"></i>
            </div>
            <div class="title"><img src="images/logo.png"  alt="teste" style="height: 250px; width: 250px; margin-left: 50px;"></div><br>
              <ul>
                <li><a href="/membrohome"><i class="fa fa-home"></i></a></li>
                <li><a href="/cadastro-login"><i class="fas fa-power-off"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="sidebar">
          <div class="sidebar-menu">
            <center class="profile">
              <img src="images/icon2.png" alt="" />
              <p>*Nome do Usuario*</p>
            </center>

            <li class="item" id="Perfil">
              <a href="/membroperfil" class="menu-btn">
                <i class="fas fa-user-circle"></i><span>Perfil</span>
              </a>
            </li>

            <li class="item" id="Perfil">
              <a href="/membrofeedbacks" class="menu-btn">
              <i class="fa-solid fa-message"></i><span>Feedbacks</span>
              </a>
            </li>

            <li class="item" id="Feedback">
              <a href="/membrotarefas" class="menu-btn">
              <i class="fa-regular fa-briefcase"></i><span>Tarefas</span>
              </a>
            </li>


              <li class="item" id="Premios">
                <a href="/membrolojadepremios" class="menu-btn">
                  <i class="fas fa-shopping-cart"></i><span>Loja de Prêmios</span>
                </a>
              </li>

              <li class="item" id="Configurações">
                <a href="/membroconfiguracoes" class="menu-btn">
                  <i class="fas fa-cog"></i><span>Configurações</span>
                </a>
              </li>

              <li class="item">
                <a href="/membrofaq" class="menu-btn">
                  <i class="fas fa-info-circle"></i><span>FAQ</span>
                </a>
              </li>

            </div>
          </div>

          <div class="main-container">


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
            </div>
            <small class="text-muted"> Selecionar humor </small>
          </div>

          <!-- EXPENSES -->
          <div class="expenses">
            <span class="material-icons-sharp"> comment </span>
            <div class="middle">
              <div class="left">
                <h3>Feedbacks Respondidos</h3>
                <h1>4</h1>
              </div>
            </div>
            <small class="text-muted"> Ver mais </small>
          </div>

          <!-- INCOME -->
          <div class="income">
            <span class="material-icons-sharp"> stacked_line_chart </span>
            <div class="middle">
              <div class="left">
                <h3>Total de pontos</h3>
                <h1>500</h1>
              </div>

            </div>

          </div>
        </div>

        <div class="recent-orders">
          <h2>Tarefas</h2>
          <table id="recent-orders--table">
            <thead>
              <tr>
                <th>Prioridade</th>
                <th>Título</th>
                <th>Pontos</th>
                <th>Entrega</th>
                <th></th>
              </tr>
            </thead>
            <!-- Add tbody here | JS insertion -->

          </table>
          <a href="#">Show All</a>
        </div>
      </main>
          </div>
        </div>

        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/dbmembro.js') }}"></script>

        <script type="text/javascript">
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });

  </script>
</body>
</html>
