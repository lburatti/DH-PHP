<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';

    public function getTelephoneNumberAttribute ($value)
    {
        $ddd = substr($value, 0, 2);
        $firstDigits = substr($value, 2, 4);
        $lastDigits = substr($value, 6, 4);

        return "($ddd) $firstDigits-$lastDigits";
    }
}
