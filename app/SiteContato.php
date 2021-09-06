<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Como o laravel identifica a tabela no banco de dados
//Realizando conversões simples como 
// Site_Contato
// site_contato
// Site_contatos

class SiteContato extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telefone',
        'message',
        'contact_reason'
    ];
}
//Utilizamos o $fillable para permitir MassAssigment, dessa forma podemos utilizar um método estático ::create para criar registross
//métodos estáticos não dependem do objeto ser instanciado