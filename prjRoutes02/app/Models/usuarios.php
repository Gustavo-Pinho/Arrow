<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = ['nm_usuario', 'nm_sobrenome', 'ds_avatar', 'ds_senha', 'ds_email', 'ds_role'];


    public function tarefas()
    {
        return $this->belongsToMany(tarefa::class, 'tarefas');
    }
}
