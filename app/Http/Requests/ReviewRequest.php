<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            //
            'score' => 'required|max:50',
            'body' => 'required|max:500',
        ];
    }
    public function attributes()
    {
        return [
            'score' => 'スコア',
            'body' => '本文',
        ];
    }
}
