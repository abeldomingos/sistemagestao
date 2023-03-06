<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    //Especificar com quais campos da tabelas nós iremos trabalhar
    //protected $fillable = ['nome', 'preco', 'estoque'];
    protected $fillable = ['nome', 'preco', 'estoque']; 
}
