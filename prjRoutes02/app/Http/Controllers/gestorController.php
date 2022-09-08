<?php

namespace App\Http\Controllers;

use App\Models\tarefa;
use App\Models\usuarios;
use App\Models\usuarios_tarefas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class gestorController extends Controller
{
    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new usuarios();
        $this->objTarefa = new tarefa();
        $this->objUsuarioTarefa = new usuarios_tarefas();
    }

    public function index(Request $request)
    {
        if(!Session::has('login') || session('role') != 'G')
        {
            return view('cadastro-login');
        }
        else
        {
            $email = session('ds_email');
            $user = usuarios::where('ds_email', $email)
            ->get();
            $photo = $user[0]->ds_avatar;

            return view('create-membro', ['photo' => $photo]);
        }
    }

    public function criarMembro(Request $request)
    {
        if(!Session::has('login'))
        {
            return view('cadastro-login');
        }
        else
        {
            $this->validate($request, [
                'text_nome'=>'required|min:3',
                'text_sobrenome'=>'required|min:3',
                'text_email'=>'required|email',
                'text_senha'=>'required|between:6,12',
                'text_role'=>'required',
                'text_confirma_senha'=>'required|same:text_senha'
            ]);

            $dados=$this->objUsuario->where(['nm_usuario'=>$request->text_nome])
            ->orWhere(['ds_email'=>$request->text_email])
            ->get();

            if($dados->count() != 0)
            {
                return redirect('create-membro')->with('erro_bd', 'Já existe um usuário com o mesmo nome');
            }

            $cadUsuario = $this->objUsuario->create([
                'nm_usuario'=>$request->text_nome,
                'nm_sobrenome'=>$request->text_sobrenome,
                'ds_email'=>$request->text_email,
                'ds_role'=>$request->text_role,
                'ds_senha'=>Hash::make($request->text_senha)
            ]);

            if($cadUsuario)
            {
                return redirect('create-membro')->with('msg', 'Usuário cadastro com sucesso!');
            }
        }
    }

            // tarefas
            public function mostrarTarefa (Request $request)
            {
                if(!Session::has('login') || session('role') != 'G')
                {
                    return view('cadastro-login');
                }
                else
                {
                    $id = session('id');
                    /*$tarefas = tarefa::where('usuario_id', $id)
                    ->get();*/
                    //$teste = $user[0]->ds_avatar;

                    //dd($id);

                    return view('create-tarefa');
                }
            }


            public function mostrarUsuario (Request $request)
            {
                if(!Session::has('login') || session('role') != 'G')
                {
                    return view('cadastro-login');
                }
                else
                {
                    $usuarios = usuarios::where('ds_role', 'M')
                    ->get();
                    //$teste = $user[0]->ds_avatar;

                    return view('create-tarefa', compact('usuarios'));
                }
            }

            public function criarTarefa(Request $request)
            {
                if(!Session::has('login'))
                {
                    return view('cadastro-login');
                }
                else
                {
                    $this->validate($request, [
                        'text_nome'=>'required|min:3',
                        'text_descricao'=>'required|min:3',
                        'text_pontos'=>'required|numeric',
                    ]);

                    $dados=$this->objTarefa->where(['nm_tarefa'=>$request->text_nome])
                    //->orWhere(['ds_email'=>$request->text_email])
                    ->get();

                    if($dados->count() != 0)
                    {
                        return redirect('create-tarefa')->with('erro_bd', 'Já existe uma tarefa com o mesmo nome');
                    }

                    //$id = session('id');
                    //$idtarefa = session('id');


                    $cadTarefa = $this->objTarefa->create([
                        'nm_tarefa'=>$request->text_nome,
                        'qtd_pontos'=>$request->text_pontos,
                        'ds_tarefa'=>$request->text_descricao,
                    ]);

                    $id_tarefa = $cadTarefa->id;
                    $testes = $request->input('text_user');

                    foreach($testes AS $teste){
                    $cadUsuarioTarefa = $this->objUsuarioTarefa->create([
                        'usuario_id'=>$teste,
                        'tarefa_id'=>$id_tarefa,
                        'tt_pontuacao'=>$request->text_pontos,
                    ]);
                }

                if($cadTarefa && $cadUsuarioTarefa)
                {
                    return redirect('create-tarefa')->with('msg', 'Tarefa criada com sucesso!');
                }
        }
    }
}
