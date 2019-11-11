<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use App\Models\Membership\Company;
use App\Models\Membership\Bridge\CompanyLkpCategory;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        //dd('request:'.$request->email , 'user:'.$user->email);
        $user->name =$request->person_in_charge_name;
        if($request->email != $user->email )
        {
            $user->email = $request->email;
        }  
        $user->phone = $request->phone;
        $user->fax = $request->fax;
        $user->address = $request->address;

        if($request->password){
            $user->password = Hash::make($request->password);
        }

        $user->save();   

        $company = $user->company;
        $company->name = $request->company_name;
        $company->email = $request->email;
        $company->person_in_charge_name = $request->person_in_charge_name;
        $company->phone = $request->phone;
        $company->fax = $request->fax;
        $company->address = $request->address;
        $company->website_url = $request->website_url;
        $company->specialize_in_description = $request->specialize_in_description;
        $company->reason_to_join = $request->reason_to_join;
        $company->user_id = $user->id;
        $company->save();
    
        if($request->logo)
        {
            Storage::disk('cpanel')->put( $company->id.'.'.$request->logo->extension() , file_get_contents($request->logo) );

            $co = Company::find($company->id);
            $co->logo_url = $co->id.'.'.$request->logo->extension();
            $co->save();
        }
        
 
        CompanyLkpCategory::whereCompanyId($company->id)->forceDelete();
        
        if($request->categories)
        {
            foreach( $request->categories as $category )
            {
                CompanyLkpCategory::create([
                    'company_id'=>$company->id,
                    'lkp_category_id'=>$category
                ]);
            }
        }

        return redirect('home')->withSuccess('Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($id)
    {
        $company = Company::find($id);
        $company->approved = 1;
        $company->save();

        return redirect('home')->withSuccess('Company Approved');
    }

}
