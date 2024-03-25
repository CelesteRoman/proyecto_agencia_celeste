<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Para el rol administrador - id = 1
     
    DB::table('rols')->insert([
        'id_rol' => '1', 
        'rol' => 'Administrador',  
        'created_at' => DB::raw('now()'),
       ]);
          // Para el rol niñera - id = 2
     
    DB::table('rols')->insert([
        'id_rol' => '2', 
        'rol' => 'Niñera',  
        'created_at' => DB::raw('now()'),
       ]);
          // Para el rol cliente - id = 3
     
    DB::table('rols')->insert([
        'id_rol' => '3', 
        'rol' => 'Cliente',  
        'created_at' => DB::raw('now()'),
       ]);
    }
}
