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
        'contact_reasons_id'
    ];
}
//Utilizamos o $fillable para permitir MassAssigment, dessa forma podemos utilizar um método estático ::create para criar registros
//métodos estáticos não dependem do objeto ser instanciado
//O método ::where é um construtor é necessário passar para ele um método get para pegar os dados da query
//$contatos = SiteContato::where('email', 'like', '%@gmail%')->get('name');
//O método ::where aceita alguns parametros de comparação como >, <, <=, >=, ==, !=, like('%achar em qualquer lugar%')
// O método ::whereIn('campo', 'parametros', parametros) ::whereNotIn realiza uma comparação por diferença dos parametros
// ::WhereBetween('id', [3, 5]) colhe os registros de 3 a 5 o ::whereNotBetween('id', [3, 5]) colhe todos que não seja 3 4 ou 5 - Pode ser utilizado com datas.
// orWhere para comparações ou. Para refinar certa busca podemos utilizar where()->where()->orWhere() encadeando-os.
// ::whereNull('updated_at') pega todos registros onde updated_at é nulo. O contrário seria ::whereNotNull
// Tem também ::whereDay('created_at', 31), whereYear('created_at', 2021), whereTime('created_at', '=', '22:57:17')
// Temos o whereColumn que compara valores de duas colunas diferentes como ::whereColumn('created_at', 'updated_at') retorna os registros cujo os quais a data de criação é igual a data de update.
// Podemos criar precedencia lógica utilizando funções de callback como ::where(function($query) { $query->where('name', 'Felipe')->orWhere('name', 'andre'); })->where(function($query) { $query->whereIn('contact_reason', [1,2])->whereBetween('id', [1, 4]);})
// Após recuperarmos uma coleção de dados do banco. É possível utilizar diversos métodos para manusear a collection.
