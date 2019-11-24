<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Norte
        App\States::create([
            'name' => 'Acre',
            'uf' => 'AC',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Amapá',
            'uf' => 'AP',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Amazonas',
            'uf' => 'AM',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Pará',
            'uf' => 'PA',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Rondônia',
            'uf' => 'RO',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Roraima',
            'uf' => 'RR',
            'region_id' => 1,
        ]);
        App\States::create([
            'name' => 'Tocantins',
            'uf' => 'TO',
            'region_id' => 1,
        ]);

        //Nordeste
        App\States::create([
            'name' => 'Alagoas',
            'uf' => 'AL',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Bahia',
            'uf' => 'BA',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Ceará',
            'uf' => 'CE',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Maranhão',
            'uf' => 'MA',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Paraíba',
            'uf' => 'PB',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Pernambuco',
            'uf' => 'PE',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Piauí',
            'uf' => 'PI',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Rio Grande do Norte',
            'uf' => 'RN',
            'region_id' => 2
        ]);
        App\States::create([
            'name' => 'Sergipe',
            'uf' => 'SE',
            'region_id' => 2
        ]);

        //Sudeste
        App\States::create([
            'name' => 'Espírito Santo',
            'uf' => 'ES',
            'region_id' => 3,
        ]);
        App\States::create([
            'name' => 'Minas Gerais',
            'uf' => 'MG',
            'region_id' => 3,
        ]);
        App\States::create([
            'name' => 'Rio de Janeiro',
            'uf' => 'RJ',
            'region_id' => 3,
        ]);
        App\States::create([
            'name' => 'São Paulo',
            'uf' => 'SP',
            'region_id' => 3,
        ]);

        //Sul
        App\States::create([
            'name' => 'Paraná',
            'uf' => 'PR',
            'region_id' => 4
        ]);
        App\States::create([
            'name' => 'Rio Grande do Sul',
            'uf' => 'RS',
            'region_id' => 4
        ]);
        App\States::create([
            'name' => 'Santa Catarina',
            'uf' => 'SC',
            'region_id' => 4
        ]);

        //Centro-oeste
        App\States::create([
            'name' => 'Distrito Federal',
            'uf' => 'DF',
            'region_id' => 5
        ]);
        App\States::create([
            'name' => 'Goiás',
            'uf' => 'GO',
            'region_id' => 5
        ]);
        App\States::create([
            'name' => 'Mato Grosso',
            'uf' => 'MT',
            'region_id' => 5
        ]);
        App\States::create([
            'name' => 'Mato Grosso do Sul',
            'uf' => 'MS',
            'region_id' => 5
        ]);
    }
}
