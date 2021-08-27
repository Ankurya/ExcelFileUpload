<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcelFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'image' => 'required|mimes:xls,csv,txt',
        // ];
    }


//     public function messages()
//     {
//         return [
//             'image.required' => 'The image field is required.',
//             'image.mimes' => 'The image extension should be xls & csv.',

//           ];
//     }
}
