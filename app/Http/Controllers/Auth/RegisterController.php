<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;

use App\Models\Membership\Company;
use App\Models\Membership\Bridge\CompanyLkpCategory;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\MembershipRequest;

class RegisterController extends Controller
{
    /* 
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, MembershipRequest::rules_json(), MembershipRequest::messages_json() );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['email'] != null)
        {
            $user = new User;
            $user->name =$data['person_in_charge_name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->fax = $data['fax'];
            $user->address = $data['address'];
            $user->password = Hash::make($data['password']);
            $user->save();   
        }
        else{
            $user = User::whereEmail($data['email'])->first();
        }

        $company = new Company;
        $company->name = $data['company_name'];
        $company->email = $data['email'];
        $company->person_in_charge_name = $data['person_in_charge_name'];
        $company->phone = $data['phone'];
        $company->fax = $data['fax'];
        $company->address = $data['address'];
        $company->website_url = $data['website_url'];
        $company->specialize_in_description = $data['specialize_in_description'];
        $company->reason_to_join = $data['reason_to_join'];
        $company->user_id = $user->id;
        $company->save();

        Storage::disk('cpanel')->put( $company->id.'.'.$data['logo']->extension() , file_get_contents($data['logo']) );
        //Storage::put( 'images' , $data['logo'] );

        $co = Company::find($company->id);
        $co->logo_url = $co->id.'.'.$data['logo']->extension();
        $co->save();


        foreach( $data['categories'] as $category )
        {
            CompanyLkpCategory::create([
                'company_id'=>$company->id,
                'lkp_category_id'=>$category
            ]);
        }
        
        return $user;
    }
}
