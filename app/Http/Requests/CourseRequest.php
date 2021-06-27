<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required|max:50',
            'address' => 'required|max:500',
            'area' => 'required|max:50',
            'number' => 'required|max:50',
            'hp' => 'max:500',
            'highway' => 'required|max:50',
            'price' => 'required|max:500',
            'card' => 'required|max:50',
            'off' => 'required|max:50',
            'workTime' => 'required|max:50',
            'cart' => 'required',
            'dish' => 'required',
            'spa' => 'required',
            'rental' => 'required',
            'img' => 'file|image|mimes:jpg,png',
        ];
    }
    public function attributes()
    {
        return [
            'name' => '施設名',
            'address' => '住所',
            'area' => '地方',
            'number' => '電話番号',
            'hp' => 'ホームページ',
            'highway' => '高速道路',
            'price' => '料金',
            'card' => '支払い方法',
            'off' => '休日',
            'workTime' => '営業時間',
            'cart' => 'カート',
            'dish' => 'レストラン',
            'spa' => 'シャワー',
            'rental' => 'レンタルクラブ',
            'img' => '写真',
        ];
    }
}
