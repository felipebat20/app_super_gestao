<?php

use Illuminate\Database\Seeder;
use App\MotivoContato;

class MotivoContatoSeeder extends Seeder
{
    public function run()
    {
        MotivoContato::create(['contact_reason' => 'Elogio']);
        MotivoContato::create(['contact_reason' => 'Dúvida']);
        MotivoContato::create(['contact_reason' => 'Reclamação']);
    }
}
