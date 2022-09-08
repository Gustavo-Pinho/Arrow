<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\usuarios;
use App\Models\usuarios_tarefas;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new usuarios();
    }

    public function index(Request $request)
    {
        if(!Session::has('login'))
        {
            return view('cadastro-login');
        }
        else
        {
            $email = session('ds_email');
            $user = usuarios::where('ds_email', $email)
            ->get();
            $photo = $user[0]->ds_avatar;

            Session::put('photo', $photo);

            $pontos = DB::table('usuarios_tarefas')
            ->join('usuarios', 'usuarios.id', '=', 'usuarios_tarefas.usuario_id')
            ->join('tarefas', 'tarefas.id', '=', 'usuarios_tarefas.tarefa_id')
            ->select('nm_usuario', 'nm_sobrenome', DB::raw('SUM(tt_pontuacao) as pontos'))
            ->groupBy('usuario_id')
            ->orderBy('tt_pontuacao', 'DESC')//->toSql()
            ->get();

            //dd($pontos);
            //->toSql()

            return view('home', ['pontos' => $pontos]);
        }
    }

    /*public function ranking(Request $request) {

            $pontos = DB::table('usuarios_tarefas')
            ->join('usuarios', 'usuarios.id', '=', 'usuarios_tarefas.usuario_id')
            ->join('tarefas', 'tarefas.id', '=', 'usuarios_tarefas.tarefa_id')
            ->select('usuario_id', DB::raw('SUM(tt_pontuacao) as pontos'))
            ->groupBy('usuario_id')
            ->orderBy('tt_pontuacao', 'DESC')
            ->get();

            /*$pontos = usuarios_tarefas::select('usuario_id',  'usuarios.nm_usuario', 'usuarios.nm_sobrenome')
            ->join('usuarios', 'usuarios.id', '=', 'usuarios_tarefas.usuario_id')
            ->join('tarefas', 'tarefas.id', '=', 'usuarios_tarefas.tarefa_id')
            ->get();

            return view('layouts.ranking', ['pontos' => $pontos]);
    }*/
}
