<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class FornecedorSeeder para executar apenas a seed de fornecedor
        // $this->call(UserSeeder::class);
        // $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
    }
}
