<?php

namespace App\Http\Requests\API;

use App\Models\s_10_user_databases;
use InfyOm\Generator\Request\APIRequest;

class Updates_10_user_databasesAPIRequest extends APIRequest
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
'user_id' => 'required',
        'name' => 'nullable|string|max:255'
];
        
        return $rules;
    }
}
