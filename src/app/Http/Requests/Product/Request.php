<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'         => 'required|string',
            'article'       => 'required|string',
            'description'   => 'nullable|string',
            'content'       => 'nullable|string',
            'preview_img'   => 'nullable|mimes:jpg,png',
            'price'         => 'required|integer',
            'count'         => 'required|integer',
            'is_published'  => 'required|boolean',
            'category_id'   => 'required|integer|exists:categories,id',
            'color_id'      => 'required|integer|exists:colors,id',
            'group_id'      => 'required|integer|exists:groups,id',
            'tags'          => 'nullable|array',
            'tags.*'        => 'nullable|integer|exists:tags,id',
        ];
    }
}
