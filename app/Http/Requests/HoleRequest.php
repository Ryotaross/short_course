<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hole_number[]' => 'max:2',
            'par[]' => 'max:2',
            'yard[]' => 'max:3',
        ];
    }
    public function attributes()
    {
        return [
            'hole_number[]' => 'HOLE',
            'par[]' => 'PAR',
            'yard[]' => 'YARD',
        ];
    }
}
