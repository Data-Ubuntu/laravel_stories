<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class ChapterRequest extends Request
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
            'product_id' => 'required',
            'chapter_name' => 'required',
            'url_rewrite' => 'required',
            'description' => 'required|min:5',
            'infomation' => 'required|min:5',
            'image' => 'sometimes|max:2048|image'
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Vui lòng chọn truyện cho chapter',
            'chapter_name.required'  => 'Tên chapter không được bỏ trống',
            'url_rewrite.required'  => 'URL Rewrite không được bỏ trống',
            'description.required' => 'Thông tin mô tả không được bỏ trống',
        ];
    }

}
