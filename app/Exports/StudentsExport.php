<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::select('name','email','address','course')->get();
    }

    /**
    * @return response()
    */
    public function headings():array{
        return['Name','Email','Address','Course'];
    }
}
