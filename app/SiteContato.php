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
//O método ::where é um construtor é necessário passar para ele um método get para pegar os dados da query
//$contatos = SiteContato::where('email', 'like', '%@gmail%')->get('name');
//O método ::where aceita alguns parametros de comparação como >, <, <=, >=, ==, !=, like('%achar em qualquer lugar%')
// O método ::whereIn('campo', 'parametros', parametros) ::whereNotIn realiza uma comparação por diferença dos parametros
// ::WhereBetween('id', [3, 5]) colhe os registros de 3 a 5 o ::whereNotBetween('id', [3, 5]) colhe todos que não seja 3 4 ou 5 - Pode ser utilizado com datas.
// orWhere para comparaçoes ou. Para refinar certa busca podemos utilizar where()->where()->orWhere() encadeando-os.