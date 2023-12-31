<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:5',
            'price' => 'required',
            'category_id' => 'required',
            'contents' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên không được trùng',
            'name.max' => 'Tên không được vượt quá 255 ký tự',
            'name.min' => 'Tên không được it hơn 5 ký tự',
            'category_id.required'=>'Tên danh mục không được để trống',
            'contents.required'=>'Nội dung không được để trống',
            'price.required'=>'Giá không được để trống'
        ];
    }
}
