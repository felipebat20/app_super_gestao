<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->name = 'Conrado Adolpho';
        // $contato->email = 'conradoadolpho@gmail.com';
        // $contato->telefone = '+5531998877665';
        // $contato->contact_reason = 2;
        // $contato->message = 'Sucesso é uma escolha';

        // $contato->save();

        // $contato1 = new SiteContato();
        // $contato1->name = 'Lendro Karnal';
        // $contato1->email = 'leandrokarnal@outlook.com';
        // $contato1->telefone = '+5531991929394';
        // $contato1->contact_reason = 1;
        // $contato1->message = 'Sorte é o nome que o vagabundo da ao esforço que ele não faz';

        // $contato1->save();

        // $contato2 = new SiteContato();
        // $contato2->name = 'Mario Sergio Cortella';
        // $contato2->email = 'cortellaoficial@gmail.com';
        // $contato2->telefone = '+5531995969798';
        // $contato2->contact_reason = 2;
        // $contato2->message = 'Vaca não da leite! Você tem que tirar';

        // $contato2->save();

        // $contato3 = new SiteContato();
        // $contato3->name = 'Clóvis Barros Filho';
        // $contato3->email = 'barrosfilho@gmail.com';
        // $contato3->telefone = '+5531999887766';
        // $contato3->contact_reason = 3;
        // $contato3->message = 'Você tem brio?';

        // $contato3->save();

        factory(SiteContato::class, 100)->create();
    }
}
