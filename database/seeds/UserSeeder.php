<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            ["70186115","percy","jove","957515933","percy00261@gmail.com"],
        ];
        foreach ($membresias as $membresia) {
            # code...
            DB::table('user')->insert([
                'dni' => $membresia[0],
                'nombres' => $membresia[1],
                'apellidos' => $membresia[2],
                'celular' => $membresia[3],
                'correo' => $membresia[4],
            ]);
        }
    }
}
