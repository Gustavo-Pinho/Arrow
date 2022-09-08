<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/tarefas.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
    <!-- loja de pontos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Cadastro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Configurações</title>
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
                <li><a href="/cadastro-login"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <img src="images/icon2.png" alt=""></img>
                <p>*Nome do Usuario*</p>
            </center>

            <li class="item" id="Perfil">
              <a href="/membroperfil" class="menu-btn">
                <i class="fas fa-user-circle"></i><span>Perfil</span>
              </a>
            </li>

            <li class="item" id="Feedback">
              <a href="/membrofeedbacks" class="menu-btn">
              <i class="fa-solid fa-message"></i><span>Feedbacks</span>
              </a>
            </li>

            <li class="item" id="Tarefas">
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
    <div class="conteudo">
        <div class="topo">
            <input type="text"
                id="inputNovaTarefa"
                placeholder="Adicione uma nova tarefa"
                >
            <button id="btnAddTarefa">
                <i class="fa fa-plus"></i>
            </button>
        </div>

        <ul id="listaTarefas">
        </ul>
    </div>

    <div id="janelaEdicao">
        <button id="janelaEdicaoBtnFechar">
            <i class="fa fa-remove fa-2x"></i>
        </button>
        <h2 id="idTarefaEdicao">#1021</h2>
        <hr>
        <form>
            <div class="frm-linha">
                <label for="nome">Nome</label>
                <input type="text" id="inputTarefaNomeEdicao">
            </div>
            <div class="frm-linha">
                <button id="btnAtualizarTarefa">Salvar</button>
            </div>
        </form>
    </div>
    <div id="janelaEdicaoFundo"></div>
    </div>
</div>
    <script src="{{ asset('js/tarefas.js') }}"></script>



        <script type="text/javascript">
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });
    </script>
</body>
</html>
