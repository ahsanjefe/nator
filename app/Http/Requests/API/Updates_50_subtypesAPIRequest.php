<?php

namespace App\Http\Requests\API;

use App\Models\s_50_subtypes;
use InfyOm\Generator\Request\APIRequest;

class Updates_50_subtypesAPIRequest extends APIRequest
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
        $rules = [
'subtype_name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255'
];
        
        return $rules;
    }
}
