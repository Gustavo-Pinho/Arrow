<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class usuariosController extends Controller
{

    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new usuarios();
    }

    public function MostrarFormLoginCadastro() {
        return view('cadastro-login');
    }

    public function FazerLogin(Request $request) {

        $this->validate($request, [
            'text_email'=>'required',
            'text_senha'=>'required'
        ]);

        $usuario = $this->objUsuario->firstWhere(['ds_email'=>$request->text_email]);

        if(!$usuario)
        {
            return redirect('cadastro-login')->with('erro_bd', 'Usuário não cadastrado!');
        }

        if(!Hash::check($request->text_senha, $usuario->ds_senha))
        {
            return redirect('cadastro-login')->with('erro_bd', 'Senha incorreta!');
        }

        //$ultimoNome = array_pop($partes);
        Session::put('login', 'ativo');
        $partes = explode(' ', $usuario->nm_usuario);
        $primeiroNome = array_shift($partes);
        $ultimoNome = $usuario->nm_sobrenome;
        $email = $usuario->ds_email;
        $role = $usuario->ds_role;
        $id =  $usuario->id;

        Session::put('nome_usuario', $primeiroNome);
        Session::put('sobrenome', $ultimoNome);
        Session::put('ds_email', $email);
        Session::put('role', $role);
        Session::put('id', $id);


        return redirect('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect('cadastro-login');
    }

    public function Store(Request $request) {

        $this->validate($request, [
            'text_nome'=>'required|min:3',
            'text_sobrenome'=>'required|min:3',
            'text_email'=>'required|email',
            'text_senha'=>'required|between:6,12',
            'text_confirma_senha'=>'required|same:text_senha'
        ]);

        $dados=$this->objUsuario->where(['nm_usuario'=>$request->text_nome])
        ->orWhere(['ds_email'=>$request->text_email])
        ->get();

        if($dados->count() != 0)
        {
            return redirect('cadastro-login')->with('erro_bd', 'Já existe um usuário com o mesmo nome');
        }

        $cadUsuario = $this->objUsuario->create([
            'nm_usuario'=>$request->text_nome,
            'nm_sobrenome'=>$request->text_sobrenome,
            'ds_email'=>$request->text_email,
            'ds_senha'=>Hash::make($request->text_senha)
        ]);

        if($cadUsuario)
        {
            return redirect('cadastro-login')->with('msg', 'Usuário cadastro com sucesso!');
        }
    }

    public function profile(Request $request)
    {
        if($request->hasfile('ds_avatar')) {

            $input = $request->validate([
                'ds_avatar' => 'file'
            ]);

            $file = $input['ds_avatar'];

            $path = $file->store('uploads', 'public');

            $input['ds_avatar'] = $path;

            $email = session('ds_email');

            $this->objUsuario::where('ds_email', $email)
                ->update(['ds_avatar' => $path]);

            return redirect('home');
        } else {
            return redirect('home')->with('msg', 'Por favor selecione uma imagem!');
        }
    }

    /*public function exibirImagem($id) {
        $foto = $this->objUsuario->find($id);
        return view('home', compact('foto'));
    }*/
}

