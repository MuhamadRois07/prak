<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bunga;

class BungaSeeder extends Seeder
{
    public function run(): void
    {
        Bunga::create([
            'NamaBunga' => 'Mawar',
            'Harga' => '10000',
            'Stock' => '15'
        ]);
    }
}
