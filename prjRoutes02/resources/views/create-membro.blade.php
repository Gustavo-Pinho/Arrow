@extends('layouts.home-template')
@section('header')

    <link rel="stylesheet" href="{{ asset('css/cadastromembro.css') }}">

@endsection


@section('content')

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

    <div class="main-container">
        <div class="card">
          <div class="container">
           
            <div class="content">
            <form action="/create-membro" method="post">
      @csrf
        <div class="title">Cadastrar Membro</div>


        <div class="input-box underline">
          <input type="text" name="text_nome" placeholder="Primeiro nome do membro" required>
          <div class="underline"></div>
        </div>

          <div class="input-box underline">
          <input type="text" name="text_sobrenome" placeholder="Último nome do membro" required>
          <div class="underline"></div>
        </div>


          <div class="input-box underline">
          <input type="text" name="text_email" placeholder="Crie um email para o membro" required>
          <div class="underline"></div>
        </div>
        <!--inserir cargo atual-->

        <div class="input-box">
          <input type="password" name="text_senha" placeholder="Crie uma senha" required>
          <div class="underline"></div>
        </div>

        <div class="input-box">
          <input type="password" name="text_confirma_senha" placeholder="Confirme a senha" required>
          <div class="underline"></div>
        </div>


        <select name="text_role" id="role" class="input-box">
            <option value="Tipo de usuário">Tipo de usuário</option>
            <option value="M">Membro</option>
            <option value="G">Gestor</option>
        </select>


        <div class="input-box button">
          <input type="submit" value="Register">
        </div>


      </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
