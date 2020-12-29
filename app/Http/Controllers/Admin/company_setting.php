<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\CompanySetting;
use Illuminate\Http\Request;
use Validator;

class company_setting extends Controller
{
    public function index(Request $request)
    {
        $get_data=CompanySetting::all();
        
        return view('admin.company.index',compact('get_data'));
    }

    public function edit($id)
    {
        $company = CompanySetting::find($id);
        
        return view('admin.company.edit',compact('company'));
        //return view('admin.company.index',compact('get_data'));
    }

    public function delete($id)
    {
        
        $company = CompanySetting::find($id)->delete();
        
        return  redirect()->route('admin.company')->with('success', 'record deleted!');
    }
    public function update(request $request, $id)
    {
        
        $data = CompanySetting::find($id);
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company_name = $request->company_name;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->address = $request->address;
        $data->accept_payments = $request->accept_payments;



        $data->save();
        return  redirect()->route('admin.company')->with('success', 'record updated!');

        


    }
  

}