<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>


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

         <form action="/create-tarefa" method="post" class="sign-up-form">
          @csrf
            <h2 class="title">Tarefa </h2>

            <div class="container2">
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="text_nome" placeholder="Nome" />
               </div>
               <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" name="text_descricao" placeholder="Descrição" />
                 </div>
               <div class="input-field">
                 <i class="fas fa-envelope"></i>
                 <input type="text" name="text_pontos" placeholder="Pontos" />
               </div>
               
             @include('layouts.mostrar-usuario')

             <input type="submit" class="btn" value="Confirmar" />
             <div class="social-media">
               </a>
             </div>

          </form>
      </div>


    </div>
    </body>
