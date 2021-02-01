<?php

use Illuminate\Database\Seeder;

use App\Peripheral;

class PeripheralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(peripheral::class, 50) -> create();
    }
}
