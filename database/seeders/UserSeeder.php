<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Para el usuario - id=1
     
    DB::table('Users')->insert([
        'id' => '3', 
        'name' => 'celeste roman',
        'id_rol' => '2', 
        'email' => 'celeste@gmail.com',
        'password' => '123456789',
        'created_at' => DB::raw('now()'),
       ]); 
       // Para el usuario - id=2
       DB::table('Users')->insert([
        'id' => '4', 
        'name' => 'roman',
        'id_rol' => '2', 
        'email' => 'roman@gmail.com',
        'password' => '123456789',
        'created_at' => DB::raw('now()'),
       ]);
    }
}
