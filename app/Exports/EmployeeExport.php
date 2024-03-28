<?php

namespace App\Exports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection,WithHeadings
{
    public function headings():array {
        return [
            'id',
            'name',
            'email',
            'phone',
            'salary',
            'department',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return employee::all();
    }
}
