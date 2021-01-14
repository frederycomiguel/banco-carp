<?php


use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Account::create([
            'tipo' => 'Poupanca',
            'ativa' => true,
            'saldo' => 10,

        ]);

    }
}
