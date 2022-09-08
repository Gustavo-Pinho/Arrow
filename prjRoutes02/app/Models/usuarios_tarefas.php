<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_tarefas extends Model
{
    protected $table = 'usuarios_tarefas';
    protected $primaryKey = 'id';
    protected $fillable = ['usuario_id', 'tarefa_id', 'tt_pontuacao'];
}

