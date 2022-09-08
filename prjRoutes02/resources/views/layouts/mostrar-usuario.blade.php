  @yield('conteudo')


  <div class="multiselect">
@foreach ($usuarios as $usuario)
    <input type="checkbox" name="text_user[]" value="{{$usuario->id}}" />
    <label for="text_user">{{$usuario->nm_usuario}} {{$usuario->nm_sobrenome}} {{$usuario->id}}</label>
@endforeach
</div>



