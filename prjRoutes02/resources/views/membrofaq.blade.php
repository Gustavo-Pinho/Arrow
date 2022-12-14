<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/faq.css') }}">


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
    <title>FAQ</title>
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
                  <i class="fas fa-shopping-cart"></i><span>Loja de Pr??mios</span>
                </a>
              </li>

              <li class="item" id="Configura????es">
                <a href="/membroconfiguracoes" class="menu-btn">
                  <i class="fas fa-cog"></i><span>Configura????es</span>
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
          <div class="card">
            <div class="flex-container">
              <div class="flex-container">
                <div>
                  <div class="container">
                    <h2>Perguntas Frequentes</h2><br></br>
                      <div class="accordion">

                        <div class="accordion-item">
                          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Como funciona o sistema de gamifica????o?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>Ao dar in??cio em uma tarefa, o gestor inicia tamb??m uma contagem de tempo, na qual ser?? base do sistema de pontua????o, junto a pontua????o de qualidade da tarefa dada pelo gestor e os respectivos membros. Essa pontua????o ir?? para um sistema de rankeamento, dispon??vel para visualiza????o apenas pelos gestores. Os pontos poder??o ser trocados por premia????es criadas pelo gestor ou por acess??rios para o avatar.</p>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">O ranking pode gerar improdutividade ou rivalidade?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>N??o! O ranking ser?? de visualiza????o exclusiva do gestor. Sendo assim, n??o haver?? compara????es explicitas pelo sistema para os funcion??rios.</p>
                          </div>
                        </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Como funciona o sistema de pontua????o?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O sistema de pontua????o funcionar?? como uma m??dia ponderada, onde ter?? maior peso o tempo de tarefa, peso intermedi??rio a avalia????o do gestor e, o menor peso, a avalia????o dos demais membros.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Quem ter?? acesso ao resultado do feedback?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>Tendo em vista as informa????es necess??rias de satisfa????o do funcion??rio para com a empresa e pessoal, os feedbacks tamb??m ser??o de visualiza????o exclusiva do gestor.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Quais s??o os benef??cios do sistema para os membros?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O sistema evidenciar?? a rela????o empresa e membro por meio dos feedbacks, onde a empresa ficar?? ciente do estado atual (mental, f??sico e profissional) do membro, al??m da opini??o dele diante o tratamento da empresa. Se necess??rio, o membro poder?? trocar seus pontos por benef??cios ?? ele, al??m de melhorar a comuica????o com o recurso do chat.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">O que posso fazer com a minha pontua????o?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>Sua pontua????o pode ser utilizada para adquirir mais itens de customiza????o para o seu avatar ou trocar por premia????es criadas pelo gestor na aba Loja de pontos.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Como customizar o meu avatar?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O avatar pode ser customizado na aba de customiza????o do avatar, onde estar?? dispon??vel os itens desbloqueados pelo usu??rio at?? o momento.</p>
                            </div>
                          </div>

                        <div class="accordion-item">
                          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Como eu posso trocar de linguagem?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>Na aba Linguagens, podendo selecionar qualquer linguagem dispon??vel pelo sistema.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });

    const items = document.querySelectorAll(".accordion button");

 function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
  </script>
</body>
</html>
