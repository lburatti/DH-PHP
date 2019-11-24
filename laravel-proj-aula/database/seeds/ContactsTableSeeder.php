<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Contacts;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 40; $i++) {
            $contacts = new Contacts;

            $contacts->full_name = 'Nome completo do fulano'.$i;
            $contacts->exhibition_name = 'Fulano'.$i;
            $contacts->email = 'fulano@email.com'.$i;
            $contacts->telephone_number = '1112345678';
            $contacts->cell_phone_number = '11912345678';

            $contacts->save();
        }
    }
}
