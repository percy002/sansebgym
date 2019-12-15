<?php

use Illuminate\Database\Seeder;
// use App\entities\PagoMembresia;
use App\Entities\{PagosMembresia};

class PagoMembresiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(PagosMembresia::class,50)->create();
    }
}
