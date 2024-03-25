<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitudes;
use Illuminate\Support\Facades\DB;

class SolicitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Solicitudes')->insert([
            'id_solicitud' => '1',
            'tipo_servicio' => 'Control neonatal', 
            'descripcion' => 'niño de 1 mes de nacido',
            'tipo_solicitud' => 'Urgente',
            'fecha' => '12-04-24',
            'hora' => '10:30 a.m.',
            'created_at' => DB::raw('now()'),
           ]); 
           DB::table('Solicitudes')->insert([
            'id_solicitud' => '2',
            'tipo_servicio' => 'Cuidados para niños mayores de 10 años', 
            'descripcion' => 'niño de 11 años',
            'tipo_solicitud' => 'Urgente',
            'fecha' => '12-04-24',
            'hora' => '10:30 a.m.',
            'created_at' => DB::raw('now()'),
           ]); 
           DB::table('Solicitudes')->insert([
            'id_solicitud' => '3',
            'tipo_servicio' => 'Control neonatal', 
            'descripcion' => 'niño de 2 mes de nacido',
            'tipo_solicitud' => 'Urgente',
            'fecha' => '22-03-24',
            'hora' => '11:00 a.m.',
            'created_at' => DB::raw('now()'),
           ]); 
    }
}
