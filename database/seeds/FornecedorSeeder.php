<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

// php artisan make:seeder Fornecedor
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fornecedor::create([
            'name' => 'Felipe',
            'site' => 'felipe.com',
            'uf' => 'MG',
            'email' => 'felipe@gmail.com'
        ]);

        Fornecedor::create([
            'name' => 'Andre',
            'site' => 'andre.com',
            'uf' => 'MG',
            'email' => 'andre@gmail.com'
        ]);

        Fornecedor::create([
            'name' => 'maria',
            'site' => 'maria.com',
            'uf' => 'MG',
            'email' => 'maria@gmail.com'
        ]);

        Fornecedor::create([
            'name' => 'Amanda',
            'site' => 'amanda.com',
            'uf' => 'MG',
            'email' => 'amanda@gmail.com'
        ]);

        Fornecedor::create([
            'name' => 'Adriana',
            'site' => 'adriana.com',
            'uf' => 'MG',
            'email' => 'adriana@gmail.com'
        ]);

        Fornecedor::create([
            'name' => 'Antonio',
            'site' => 'antonio.com',
            'uf' => 'MG',
            'email' => 'antonio@gmail.com'
        ]);
    }
}
