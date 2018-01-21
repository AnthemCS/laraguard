<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
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
            "room_title"   => "required|max:255",
            "room_no"      => "required|alpha_num|max:10",
            "room_type"    => "required|max:255",
            "description"  => "required|max:255",
            "occupancy"    => "required|numeric|max:10",
            "beds"         => "required|numeric|max:10",
            "price"        => "required|numeric"
        ];
    }
}
