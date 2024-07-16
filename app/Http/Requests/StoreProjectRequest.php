<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreProjectRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:categories,id',
            'team_id' => 'required|integer|exists:teams,id',
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'image' => 'required',
            'client_name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'start_date' => 'required|date',
            'location' => 'required|string|max:255',
            'overview' => 'required',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }
}
