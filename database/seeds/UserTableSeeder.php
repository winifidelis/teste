<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Gafanhotos\User::class, 1)->states('admin')->create([
            'name'  => 'Administrador',
            'email' => 'admin@teste.com.br',
            'phone' => '(62) 99999-0000',
            'cpf'   => '99193133197',
            'password'  => bcrypt('federalst')
        ]);

        factory(\Gafanhotos\User::class, 1)->states('user')->create([
            'name'  => 'Usuario Teste',
            'email' => 'user@teste.com.br',
            'phone' => '(62) 00000-0000',
            'cpf'   => '21429528109',
            'password'  => bcrypt('federalst')
        ]);

        factory(\Gafanhotos\User::class, 50)->states('user')->create();

    }
}
