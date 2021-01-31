<?php

namespace App\Imports;

use App\Models\Humans;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HumansImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Humans([
            'first_name' =>$row['first_name'],
            'last_name' =>$row['last_name'],
            'email'=>$row['email'],
            'phone'=>$row['phone'],
            'address'=>$row['address'],
            'town'=>$row['town'],
        ]);
    }
}
