<?php

use Illuminate\Database\Seeder;

class TablaVehiculo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'cedula' => '234946',
            'nombre' => 'Kathy Lopez',
        ]);

        DB::table('vehiculos')->insert([
            'placa' => 'ABC-366',
            'marca' => 'mazda',
            'persona_id' => '1'
        ]);
        DB::table('personas')->insert([
            'cedula' => '29065',
            'nombre' => 'Maria Ordoñez',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => 'ABD-316',
            'marca' => 'toyota',
            'persona_id' => '2'
        ]);

    }
}
