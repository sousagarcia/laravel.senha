<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Senha extends Model
{
    protected $table = 'senhas';

    protected $fillable = [
        'chave',
    ];
}
