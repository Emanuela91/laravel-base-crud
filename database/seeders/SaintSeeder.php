<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// richiamo il models Saint
use App\Models\Saint;

class SaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // richiamo la factory che mi creerà 100 voci con le caratteristiche della tabella 
        Saint::factory()->count(100)->create();
    }
}