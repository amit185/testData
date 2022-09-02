<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Company;
use DB;

class CompanyController extends Controller
{
    public function index()
    {
        return view('admin.add-company');
    }
    public function addCompany(Request $request)

    {
        $request->validate([
                'company_name' => "required",
                'company_link' => "required",
                'company_location' => "required",
            
            ]);
            
        
            $model = new Company();
            
            $model -> company_name = $request->company_name;
            $model -> company_location = $request->company_location;
            $model -> company_link = $request->company_link;
            $model -> company_content = $request->company_content;
        //  dd($model);
        
        if($request->hasFile('company_logo'))
        {
            $file = $request->file('company_logo');
            $extension = $file->getClientOriginalExtension();
            $filename =time() .'.' .$extension;
            $file->storeAS('/public/uploade',$filename);
            $model->company_logo =$filename;
        }
        $model -> company_status = $request->company_status;
    
        $model ->save();
        
        return back()->with('add-company','Company add successfully');



        
    }
    public function listCompany()
    {
        $company['company'] = Company::all();

        return view('admin.list-company',$company);
    }
    public function edit($id)
    {
        $company['company'] = Company::find($id);
        return view('admin.edit-company',$company);
    }
    public function UpadateCompany(Request $request )

    {
        // dd($request->all());
        $request->validate([
                'company_name' => "required",
                'company_link' => "required",
                'company_location' => "required",
            
            ]);
            
        // DB::enableQueryLog();
            $model = Company::find($request->company_id);
           
            $model -> company_name = $request->company_name;
            $model -> company_location = $request->company_location;
            $model -> company_link = $request->company_link;
            $model -> company_content = $request->company_content;
        //  dd($model);
        
        if($request->hasFile('company_logo'))
        {
            $file = $request->file('company_logo');
            $extension = $file->getClientOriginalExtension();
            $filename =time() .'.' .$extension;
            $file->storeAS('/public/uploade',$filename);
            $model->company_logo =$filename;
        }
        $model -> company_status = $request->company_status;
    
        $model ->update();
        // dd(DB::getQueryLog())
        // $request->session()
        $request->session()->flash("error","Failed updated");

        return redirect('admin.list-company','Company add successfully');
        // return back()->with('list-company','Company add successfully');



        
    }

}
