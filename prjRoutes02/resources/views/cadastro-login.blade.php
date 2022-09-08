<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}" />
    <title>Cadastro/Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- Validação do Login -->

          @include('layouts.errors.validacao')

          <!-- Parte do Login -->

          <form action="/login" method="post" class="sign-in-form">
            @csrf
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="text_email" placeholder="E-mail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="text_senha" placeholder="Senha" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <div class="social-media">
              </a>
            </div>
          </form>

          <!-- Parte do Registro -->

          @if (session('msg'))
          <div class="alert alert-success">
              <p>{{session('msg')}}</p>
          </div>
      @endif

      @if (session('erro_bd'))
          <div class="alert alert-danger">
              <p>{{session('erro_bd')}}</p>
          </div>
      @endif

           <form action="/cadastro" method="post" class="sign-up-form">
            @csrf
              <h2 class="title">Cadastre-se </h2>

              <div class="container2">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" name="text_nome" placeholder="Nome" />
                 </div>
                 <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="text_sobrenome" placeholder="Sobrenome" />
                   </div>
                 <div class="input-field">
                   <i class="fas fa-envelope"></i>
                   <input type="text" name="text_email" placeholder="E-mail" />
                 </div>
              </div>

              <div class="container3">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="password" name="text_senha" placeholder="Senha" />
                 </div>
                <div class="input-field">
                 <i class="fas fa-lock"></i>
                <input type="password" name="text_confirma_senha" placeholder="Confirmar senha" />
                </div>
              </div>

               <input type="submit" class="btn" value="Confirmar" />
               <div class="social-media">
                 </a>
               </div>
            </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo Aqui ?</h3>
            <p>
              Seja bem vindo(a) à plataforma web que torna a realização de tarefas em equipe mais produtiva e divertida. Caso ainda não tenha uma conta, clique no botão abaixo.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Cadastrar
            </button>
          </div>
          <img src="images/logo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Já Faz Parte da Plataforma ?</h3>
            <p>
              Caso você já seja um usuário da Arrow, basta clicar no botão abaixo e relizar seu login.

            </p>
            <button class="btn transparent" value="login" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="images/logo.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
