<?php

use Illuminate\Database\Seeder;

class MembresiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $membresias=[
            ["mes","50",1],
            ["3 meses" , 120 , "3"],
            ["sesiones" , 7 , "0"]
        ];
        foreach ($membresias as $membresia) {
            # code...
            DB::table('tipomembresia')->insert([
                'nombreMembresia' => $membresia[0],
                'tiempo' => $membresia[1],
                'precioSugerido' => $membresia[2],
            ]);
        }
    }
}
