<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make the request
     */
    public function authorize():bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request
     * 
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'teamName' => 'required|string',
            'country' => 'required|string',
            'teamColor' => 'required|string',
            'yearFounded' => 'required|integer'
        ];
    }
}