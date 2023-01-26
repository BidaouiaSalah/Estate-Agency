<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionType::create([
            'name' => 'For Rent',
            'slug' => 'rent'
        ]);
        TransactionType::create([
            'name' => 'For Sell',
            'slug' => 'sell'
        ]);
        TransactionType::create([
            'name' => 'To Buy',
            'slug' => 'buy'
        ]);
        TransactionType::create([
            'name' => 'For holliday',
            'slug' => 'rent'
        ]);
    }
}
