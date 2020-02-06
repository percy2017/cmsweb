<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {   
        foreach ($collection as $row) 
        {
            User::create([
                'name'     => $row[0],
                'email'    => $row[1],
                'role_id'  => $row[2],
                'password' => Hash::make($row[3])
            ]);
        }
    }
}
