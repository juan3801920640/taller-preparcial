<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
     * @return array<string=> \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'vehicle_brand' => 'required|string',
            'doors_number' => 'required|integer',
            'model'=> 'required|date',
            'color'=> 'required|string',
            'cylinder_capacity_cc'=>  'required|integer',
            'horse_power' => 'required|integer'
        ];
    }
}
