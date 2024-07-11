<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDashboardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bar1' => 'required|integer',
            'bar2' => 'required|integer',
            'bar3' => 'required|integer',
            'bar4' => 'required|integer',
            'bar5' => 'required|integer',
            'bar6' => 'required|integer',
            //  'image1' => 'image|required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image6' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image7' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
