@extends('layouts.home-template')
@section('header')

    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">

@endsection


@section('content')

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
        <div class="name">Kaylane Costa</div>
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

@endsection
