<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class BookRequest extends Request
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
            'book_title' => 'required',
            'author' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'book_title.required' => 'Tên sách không được bỏ trống',
            'author.required'  => 'Tên tác giả không được bỏ trống',
        ];
    }
}
