<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class ResultsExport implements FromArray,WithStrictNullComparison
{
    protected $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function array(): array
    {
        return $this->students;
    }
}

/*class ResultsExport implements FromCollection
{
    public function collection()
    {
        return Course::all();
    }
}*/
