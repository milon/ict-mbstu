<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AlumniRequest extends Request
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
            'name'         => 'required',
            'student_id'   => 'required',
            'degree'       => 'required',
            'passing_year' => 'required',
            'email'        => '',
            'phone'        => '',
            'website'      => '',
            'description'  => ''
        ];
    }

}
