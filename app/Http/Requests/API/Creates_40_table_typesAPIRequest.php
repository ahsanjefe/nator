<?php

namespace App\Http\Requests\API;

use App\Models\s_40_table_types;
use InfyOm\Generator\Request\APIRequest;

class Creates_40_table_typesAPIRequest extends APIRequest
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
        return s_40_table_types::$rules;
    }
}
