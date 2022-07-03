<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::factory()
        ->count(25)
        ->create();
    }
}
