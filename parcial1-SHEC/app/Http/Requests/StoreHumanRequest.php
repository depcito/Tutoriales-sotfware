<?php

namespace App\Http\Requests;

use App\Models\Human;
use Illuminate\Foundation\Http\FormRequest;

class StoreHumanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'aura' => 'required|integer|min:0',
            'hierarchy' => 'required|in:'.implode(',', Human::hierarchies()),
        ];
    }
}
