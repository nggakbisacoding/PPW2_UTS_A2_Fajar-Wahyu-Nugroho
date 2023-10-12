<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;
use Illuminate\Support\Facades\DB;
use Database\Factories\pemainFactory;

class pemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemain::factory()->count(10)->create();
    }
}
