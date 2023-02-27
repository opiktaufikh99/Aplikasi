<?php

namespace App\Imports;

use App\Models\VendorModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class vendorImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VendorModel([
            'name'=> $row['name'],
            'email'=>$row['email'],
            'no_tlpan'=>$row['no_tlpan'],
            'alamat'=>$row['alamat'],
            'buyer_id'=>$row['buyer_id']
        ]);
    }
}