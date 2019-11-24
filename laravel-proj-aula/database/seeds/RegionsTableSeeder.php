<?php
use Illuminate\Database\Seeder;
class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Regions::create([
            'name' => 'Norte',
        ]);
        App\Regions::create([
            'name' => 'Nordeste',
        ]);
        App\Regions::create([
            'name' => 'Sudeste',
        ]);
        App\Regions::create([
            'name' => 'Sul',
        ]);
        App\Regions::create([
            'name' => 'Centro-Oeste',
        ]);
    }
}
