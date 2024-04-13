<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => ['string', 'max:255', 'required'],
            'slug' => ['string', 'required'],
            'body' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,svg,gif,jpg', 'max:4048'],
            'published_at' => ['required']
        ];
    }
}
