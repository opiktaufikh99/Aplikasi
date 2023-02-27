<?php

namespace App\Exports;

use App\Models\vendor;
use App\Models\VendorModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class vendorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VendorModel::all();
    }
}
