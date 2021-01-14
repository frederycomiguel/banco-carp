<?php


use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Transaction::create([
            'valor' => 50,
            'account_id' => 1,

        ]);

    }
}
