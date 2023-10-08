<?php

namespace App\Http\Requests\API;

use App\Models\s_40_table_types;
use InfyOm\Generator\Request\APIRequest;

class Updates_40_table_typesAPIRequest extends APIRequest
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
'table_type' => 'required|boolean',
        'model' => 'nullable|string|max:255'
];
        
        return $rules;
    }
}
