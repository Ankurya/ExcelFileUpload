<?php

namespace App\Imports;

use App\Models\File;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FileImport implements ToModel, WithValidation, WithHeadingRow
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new File([
            'name' => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);

    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:files,name',
            'email' => 'required|unique:files,email',
            'phone' => 'required|unique:files,phone',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.required' => 'Name column not found.',
            'email.required' => 'Email column not found.',
            'phone.required' => 'Phone column not found.',

        ];
    }

}
