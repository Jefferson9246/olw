<?php

namespace Database\Seeders;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(100)
        ->has(Seller::factory() //aproveitando para encadear factories
            ->hasSales(30)) //Já informando quantas vendas esse usuario terá
        ->create();

    }
}
