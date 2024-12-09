<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeasessment_user_dataRequest extends FormRequest
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
            'nama_lengkap'  => 'required',
            'nomor_wa'      => 'required',
            'kota'          => 'required',
            'umur'          => 'required'
        ];  
    }
}
