<?php

namespace App\Http\Requests\API;

use App\Models\s_30_data_types;
use InfyOm\Generator\Request\APIRequest;

class Updates_30_data_typesAPIRequest extends APIRequest
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
'type_name' => 'nullable|string|max:255'
];
        
        return $rules;
    }
}
