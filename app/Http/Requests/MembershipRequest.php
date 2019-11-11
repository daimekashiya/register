<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembershipRequest extends FormRequest
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
        return $this->rules_json();
    }

    public function messages()
    {
        return $this->messages_json();
    }

    //
    public static function rules_json() 
    {
        return [
            'person_in_charge_name' => ['string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],
    
    
            'company_name'  => ['required', 'string', 'max:255'],
            'phone' => ['numeric','max:9999999999999999999'],
            'fax' => ['numeric','max:9999999999999999999'],
            'address'  => ['string', 'max:255'],
            'website_url'  => ['string', 'max:255'],
            'specialize_in_description'  => ['string', 'max:255'],
            'reason_to_join'  => ['string', 'max:255']
        ];
    }

    public static function messages_json()
    {
        return [
            'required'=>':attribute field is required',
            'string'=>':attribute must be String',
            'max'=>':attribute max size is :max',
            'email'=>':attribute must be in name@name.domain',
            'unique'=>':attribute :input already exist',
            'min'=>':attribute min size is :min',
            'numeric'=>':attribute must be numeric'
        ];
    }


}
