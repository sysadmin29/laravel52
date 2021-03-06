<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WorkstationRequest extends Request
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
        return [
            'rack_id' =>'required',
            'ip_address' =>'required',
            'workstation_id' =>'required',
            'table' =>'required',
            'location' =>'required',
            'operator' =>'required',
            'comp_name' =>'required',
            'mac_address' =>'required',
        ];
    }
}
