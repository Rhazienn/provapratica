<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//criando model de atomoveis e definindo tabela devido a não existencia do plural "automovels"
class Automovel extends Model
{
    use HasFactory;
    protected $table = 'automoveis';
}
