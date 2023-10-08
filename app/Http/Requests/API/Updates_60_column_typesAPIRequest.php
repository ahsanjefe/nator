<?php

namespace App\Http\Requests\API;

use App\Models\s_60_column_types;
use InfyOm\Generator\Request\APIRequest;

class Updates_60_column_typesAPIRequest extends APIRequest
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
'column_name' => 'nullable|string|max:255',
        'table_id' => 'required',
        'table_type_id' => 'required',
        'subType_id' => 'nullable',
        'column_type_primary' => 'required',
        'list' => 'nullable|boolean',
        'null' => 'nullable|boolean'
];
        
        return $rules;
    }
}
