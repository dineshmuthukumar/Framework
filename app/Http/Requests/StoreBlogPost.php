<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
'Firstname'=> 'required|max:25',
'Lastname'=>'required|max:25',
'gender'=>'filled|required',
'borndate'=>'date_format:"d-m-Y"|required',
'Address'=>'required|max:30',
'City'=>'required',
'State'=>'nullable',
'country'=>'required|min:6',
'emailid'=>'required|email',
'mobileno'=>'Integer|min:10',
'password'=>'required|min:8',
'Confirm_password'=>'required_with:password|same:password|min:8'
            //
        ];
    }
public function messages()
{
    return [
        'Student_name.required' => 'A name is required',
        'emailid.required'  => 'A Email is required',
    ];
}
}
