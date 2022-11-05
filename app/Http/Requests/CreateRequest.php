<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' => ['required','min:4','max:20'],
            'user_id' => ['required','numeric'],
            'description' => ['required','min:10','max:255']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => '*this field is required',
            'title.min' => '*Insert more characters',
            'title.max' => '*Remove some characters',
            'user_id.numeric' => '*Select a Post\'s creator',
            'description.required' => '*this field is required',
            'description.min' => '*Insert more characters',
            'description.max' => '*Remove some characters',
        ];
    }
}
