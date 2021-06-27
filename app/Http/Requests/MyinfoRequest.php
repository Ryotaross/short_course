<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MyinfoRequest extends FormRequest
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
            'best_score' => 'required|max:50',
            'favorite' => 'required|max:500',
            'start' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'best_score' => 'ベストスコア',
            'favorite' => 'お気に入り',
            'start' => '始めた日',
        ];
    }
}
