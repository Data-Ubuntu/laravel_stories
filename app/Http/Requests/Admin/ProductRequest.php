<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'title' => 'required',
            'author' => 'required',
            'url_rewrite' => 'required',
            'category_id' => 'required',
            'description' => 'required|min:5',
            'image' => 'sometimes|max:2048|image'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tên truyện không được bỏ trống',
            'url_rewrite.required'  => 'URL Rewrite không được bỏ trống',
            'author.required'  => 'Tác giả không được bỏ trống',
        ];
    }

}
