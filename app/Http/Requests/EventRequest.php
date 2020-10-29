<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
        $categories = Category::pluck('id');
        return [
            'title' => 'required|string|max:50|unique:events',
            'category_id' => ['required','integer', Rule::in($categories)],
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'begin_at' => 'nullable|date|after:now',
            'end_at' => 'nullable|date|after:begin_at',
            'count_subscriber' => 'nullable|integer|min:0',
            'address' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0' 
        ];
    }
}
