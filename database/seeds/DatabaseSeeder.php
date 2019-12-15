<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTablas([
            'socio',
            'tipoMembresia',
            'pagoMembresia',
        ]);
        $this->call(SocioTableSeeder::class);
        $this->call(MembresiaSeeder::class);
        $this->call(PagoMembresiaSeeder::class);
    }
    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tablas as $tabla) {
            # code...
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
