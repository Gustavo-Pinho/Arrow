<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tarefa extends Model
{
    protected $table = 'tarefas';
    protected $primaryKey = 'id';
    protected $fillable = ['nm_tarefa', 'ds_tarefa', 'ds_status', 'qtd_pontos'];

    public function usuarios()
    {
        return $this->belongsToMany(usuarios::class, 'usuarios');
    }
}
