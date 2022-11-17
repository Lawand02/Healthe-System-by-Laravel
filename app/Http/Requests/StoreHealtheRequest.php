<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHealtheRequest extends FormRequest
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
     * @return array<string, mixed>
     * Second way for validation:
     */
    public function rules()
    {
        return [
          
                'First_name'=>'required',
                'Last_name'=>'required',
                'State'=>'required',
                'The_disease'=>'required', 
                'Address'=>'required',
                'Birthday'=>'required', 
                'Doctor_name'=>'required',
                'Blood_Type'=>'required',
                'Phone'=>'required', 
                'Email'=>'required', 
                'Gender'=>'required', 
                'Nationality'=>'required'  
             
        ];
    }
    /* public function massage(){

        return [
           'First_name.required' => 'A First_name is required',
           'Last_name.required' => 'A Last_name is required',
           'State.required' => 'A State is required',
           'Email.required' => 'A Email is required',
           'Gender.required' => 'A Gender is required',
           'The_disease.required' => 'A The_disease is required',
        ];
    } */
}
