<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Servicios')->insert([
            'id_servicio' => '1', 
            'tipo_servicio' => 'Cuidados para niños con discapacidad',
            'descripcion' => 'Cuidados especial para niños con discapacidad (autismo,etc.)',
            'niñera' => 'Rosa Cosio Albarez',
            'created_at' => DB::raw('now()'),
           ]); 
           DB::table('Servicios')->insert([
            'id_servicio' => '2', 
            'tipo_servicio' => 'Cuidados para niños mayores de 10 años',
            'descripcion' => 'Los niños son cuidados y entretenidos',
            'niñera' => 'Maria Rocio Serena',
            'created_at' => DB::raw('now()'),
           ]); 
           DB::table('Servicios')->insert([
            'id_servicio' => '3', 
            'tipo_servicio' => 'Control neonatal',
            'descripcion' => 'Niños recien nacidos o menores de 5 meses',
            'niñera' => 'Paola Ribaz Albarez',
            'created_at' => DB::raw('now()'),
           ]); 
           DB::table('Servicios')->insert([
            'id_servicio' => '4', 
            'tipo_servicio' => 'Cuidados para niños en la noche',
            'descripcion' => 'Cuando salgan los padres los niños seran supervisados',
            'niñera' => 'Aurora Ribaz Perz',
            'created_at' => DB::raw('now()'),
           ]); 
    }
}
