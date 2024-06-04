<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportExcel implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection (Collection $rows)
    {
        foreach($rows as $row)
        {
            User::create([
                'username' => $row['username'],
                'email' => $row['email'],
                'password' => $row['password'],
                'role' => $row['role'],
                'department' => $row['department'],
                'approval' => $row['approval'],
                'status' => $row['status'],
            ]);
        }
    }
}
