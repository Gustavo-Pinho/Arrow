<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">


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
    <title>Perfil</title>
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
          <div class="container">
   <input type="checkbox" id="switch">
  <div class="outer">
    <div class="content">
      <label for="switch">

          <span class="circle"></span>
        </span>
      </label>
      <div class="image-box">
       <img src="images/kaylane.png" alt="">
      </div>
      <div class="details">
        <div class="name">Kaylane Chavier</div>
        <div class="job">JavaScript Developer</div>
        <div class="buttons">
          <p>Tenho 18 anos, gosto de ir na praia e sair com os meus amigos.</p>
          <button>Alterar biografia</button>
        </div>
      </div>
    </div>
  </div>

 </div>

 <div class="card">

        <div class="modal" id="todo_form">
          <div class="header">
            <div class="title"></div>
            <button class="btn close-modal">&times;</button>
          </div>
          <div class="body">
            <input type="text" id="todo_input" />
            <input type="submit" value="Confirmar" id="todo_submit" />
          </div>
        </div>
        <!-- Para Fazer -->
        <div class="todo-container">
          <div class="status" id="no_status">
            <h1>Para Fazer</h1>
            <button id="add_btn" data-target-modal="#todo_form">+ Adicionar</button>
            <div class="todo" draggable="true">
              Desenvolver 2 Paginas Html
              <span class="close">&times;</span>
            </div>

           <div class="todo" draggable="true">
              Desenvolver Sistema de Ranking dos Usuários
              <span class="close">&times;</span>
            </div>
          </div>

          <div class="status">
            <h1>Fazendo</h1>

            <div class="todo" draggable="true">
              Aperfeiçoar o Sistema Gamificado
              <span class="close">&times;</span>
            </div>

          </div>

          <div class="status">
            <h1> Feito</h1>

            <div class="todo" draggable="true">
              Desenvolvimento da Pagina Perfil
              <span class="close">&times;</span>
            </div>

            <div class="todo" draggable="true">
              Desenvolvimento da Pagina Loja de Pontos
              <span class="close">&times;</span>
            </div>
          </div>
        </div>

        <div id="overlay"></div>

      </div>

</div>
        </div>

        <script type="text/javascript">

  //INICIO DA KANBAN
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });


    const todos = document.querySelectorAll(".todo");
const all_status = document.querySelectorAll(".status");
let draggableTodo = null;

todos.forEach((todo) => {
  todo.addEventListener("dragstart", dragStart);
  todo.addEventListener("dragend", dragEnd);
});

function dragStart() {
  draggableTodo = this;
  setTimeout(() => {
    this.style.display = "none";
  }, 0);
  console.log("dragStart");
}

function dragEnd() {
  draggableTodo = null;
  setTimeout(() => {
    this.style.display = "block";
  }, 0);
  console.log("dragEnd");
}

all_status.forEach((status) => {
  status.addEventListener("dragover", dragOver);
  status.addEventListener("dragenter", dragEnter);
  status.addEventListener("dragleave", dragLeave);
  status.addEventListener("drop", dragDrop);
});

function dragOver(e) {
  e.preventDefault();
  //   console.log("dragOver");
}

function dragEnter() {
  this.style.border = "1px dashed #ccc";
  console.log("dragEnter");
}

function dragLeave() {
  this.style.border = "none";
  console.log("dragLeave");
}

function dragDrop() {
  this.style.border = "none";
  this.appendChild(draggableTodo);
  console.log("dropped");
}

/* SPAN */
const btns = document.querySelectorAll("[data-target-modal]");
const close_modals = document.querySelectorAll(".close-modal");
const overlay = document.getElementById("overlay");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(btn.dataset.targetModal).classList.add("active");
    overlay.classList.add("active");
  });
});

close_modals.forEach((btn) => {
  btn.addEventListener("click", () => {
    const modal = btn.closest(".modal");
    modal.classList.remove("active");
    overlay.classList.remove("active");
  });
});

window.onclick = (event) => {
  if (event.target == overlay) {
    const modals = document.querySelectorAll(".modal");
    modals.forEach((modal) => modal.classList.remove("active"));
    overlay.classList.remove("active");
  }
};

/* CRIAR PARAFAZER  */
const todo_submit = document.getElementById("todo_submit");

todo_submit.addEventListener("click", createTodo);

function createTodo() {
  const todo_div = document.createElement("div");
  const input_val = document.getElementById("todo_input").value;
  const txt = document.createTextNode(input_val);

  todo_div.appendChild(txt);
  todo_div.classList.add("todo");
  todo_div.setAttribute("draggable", "true");

  /* CRIAR SPAN */
  const span = document.createElement("span");
  const span_txt = document.createTextNode("\u00D7");
  span.classList.add("close");
  span.appendChild(span_txt);

  todo_div.appendChild(span);

  no_status.appendChild(todo_div);

  span.addEventListener("click", () => {
    span.parentElement.style.display = "none";
  });
  //   console.log(PARA FAZER_div);

  todo_div.addEventListener("dragstart", dragStart);
  todo_div.addEventListener("dragend", dragEnd);

  document.getElementById("todo_input").value = "";
  todo_form.classList.remove("active");
  overlay.classList.remove("active");
}

const close_btns = document.querySelectorAll(".close");

close_btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn.parentElement.style.display = "none";
  });
});
  </script>
</body>
</html>
