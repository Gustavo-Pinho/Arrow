<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @yield('header')

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

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                <li><a href="/home"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('logout')}}"><i class="fas fa-power-off"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="sidebar">
          <div class="sidebar-menu">
            <center class="profile">
                <label for="avatar">
                    <span><img id="imgPreview" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(session('photo')) }}"></span>
                </label>

                  <p>{{session('nome_usuario')}} {{session('sobrenome')}}</p>

                  <form enctype="multipart/form-data" action="{{url("/profile")}}" method="POST">
                    @csrf
                        <input type="hidden" name="email" value="{{session('ds_email')}}">
                        <input type="file" id="avatar" name="ds_avatar">
                        <input id="teste" type="submit">
                </form>

                </center>

            <li class="item" id="Perfil">
              <a href="/perfil" class="menu-btn">
                <i class="fas fa-user-circle"></i><span>Perfil</span>
              </a>
            </li>

            @if (session('role') === 'G')
                <li class="item" id="Cadastro">
                    <a href="/create-membro" class="menu-btn">
                        <i class="fas fa-user-plus"></i><span>Cadastrar Membro</span>
                    </a>
                </li>
            @endif

            <li class="item" id="Equipe">
              <a href="/membro" class="menu-btn">
                <i class="fas fa-users"></i><span>Membros</span>
              </a>
            </li>

              <li class="item" id="Premios">
                <a href="/lojadepontos" class="menu-btn">
                  <i class="fas fa-shopping-cart"></i><span>Loja de Prêmios</span>
                </a>
              </li>

              <li class="item" id="Configurações">
                <a href="/configuracoes" class="menu-btn">
                  <i class="fas fa-cog"></i><span>Configurações</span>
                </a>
              </li>

              <li class="item">
                <a href="/faq" class="menu-btn">
                  <i class="fas fa-info-circle"></i><span>FAQ</span>
                </a>
              </li>

            </div>
          </div>

          @yield('content')
    <!--Inicio do Container principal-->
    <div class="main-container">
    @yield('ranking')
      <div class="card">
      </div>
    </div>
</div>

    <script type="text/javascript">
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });
  </script>

  <script>
    var buttonFile = document.getElementById("avatar");

    editarAvatar.addEventListener("click", function(){
        buttonFile.click();
    });
  </script>
</body>
</html>
