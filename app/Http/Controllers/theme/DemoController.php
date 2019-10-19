<?php

namespace App\Http\Controllers\theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Models\Membership\Company;
use App\Models\Membership\Bridge\CompanyLkpCategory;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home($id){
        return view('theme.demo.home',compact('id'));
    }

}
