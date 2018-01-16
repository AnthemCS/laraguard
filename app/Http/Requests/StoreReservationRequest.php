<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'title'       => 'required|max:4',
            'firstname'   => 'required|max:255',
            'lastname'    => 'required|max:255',
            'email'       => 'required|unique:users|max:255',
            'contact_no'  => 'required|phone:AUTO|max:255',
            'fax_no'      => 'required|numeric',
            'addr_line_1' => 'required|max:255',
            'addr_line_2' => 'required_with:addr_line_1|max:255',
            'city'        => 'required|max:255',
            'postal_code' => 'required|max:10',
            'country'     => 'required|max:255',
            'adults'      => 'required|numeric|max:255',
            'children'    => 'required|numeric|max:255',
            'comments'    => 'required|max:255'
                                
        ];
    }
}
