<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RegionalCommand;
use App\Models\SubCommand;
use App\Models\Company;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
           // SituacaoContaSeeder::class,
           // ContaSeeder::class,
         // TipoContaSeeder::class,

           SeederComandoRegional::class,
           SeederBatalhao::class,
           SeederCompanies::class,
          //  SeederType_vehicle::class,
         
           
             // CategorySeeder::class,
             // SubcategorySeeder::class,
             // SituationVehiclesSeeder::class,
             
            
        ]);

    }
}
