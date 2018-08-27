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
'borndate'=>'date_format:"format"|required',
'Address'=>'required|max:30',
'City'=>'required',
'State'=>'nullable',
'country'=>'required|min:6',
'emailid'=>'required|email',
'mobileno'=>'Integer|min:10',
'Password'=>'required|min:8',
'Confirm_Password'=>'required_with:password|same:Password|min:8'];
    }
public function messages()
{
    return [
        'mobileno.required' => 'A mobile_Number is required',
        'emailid.required'  => 'A Email_id is required',
    ];
}
}
