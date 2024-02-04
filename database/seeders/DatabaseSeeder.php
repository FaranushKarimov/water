<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CanalsTableSeeder::class);
        $this->call(CatchmentAreasTableSeeder::class);
        $this->call(DrainagesTableSeeder::class);
        $this->call(HydropostsTableSeeder::class);
        $this->call(IrrigationsTableSeeder::class);
        $this->call(LakesTableSeeder::class);
        $this->call(MainRiversTableSeeder::class);
        $this->call(OblastsTableSeeder::class);
        $this->call(QcordinatesTableSeeder::class);
        $this->call(QmssTableSeeder::class);
        $this->call(QrequestsTableSeeder::class);
        $this->call(QtargetsTableSeeder::class);
        $this->call(QwuasTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ReservoirsTableSeeder::class);
        $this->call(WaterBasinZonesTableSeeder::class);
        $this->call(WaterLevelsTableSeeder::class);
        $this->call(WuasTableSeeder::class);
    }
}
