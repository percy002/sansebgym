<?php

use Illuminate\Database\Seeder;
use App\Entities\{Socio};

class SocioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Socio::class,50)->create();
    }
}
