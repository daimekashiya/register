<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'email','person_in_charge_name','phone','fax','address','website_url','specialize_in_description','reason_to_join'
    ];

    public function lkp_categories()
    {
        return $this->belongsToMany('App\Models\Lkp\LkpCategory')->using('App\Models\Membership\Bridge\CompanyLkpCategory');
    }

}
