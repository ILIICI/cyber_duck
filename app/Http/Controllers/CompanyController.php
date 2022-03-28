<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyValidation;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company',['companies' => Company::orderBy('id','desc')->paginate(10)]);
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
    public function store(CompanyValidation $request)
    {
        $company = new Company ();
        $input = $request->only('name','email','website','logo');

        if($request->hasFile('logo')){
            $destination_path = 'public/companies/logo';
            $image_name = time()."_".$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs($destination_path,$image_name);
            $company->create([
                'name' => $input['name'],
                'email' => $input['email'],
                'website' => $input['website'],
                'logo' => $image_name,
            ]);
        }else{
            $company->create([
                'name' => $input['name'],
                'email' => $input['email'],
                'website' => $input['website'],
            ]);
        }


        return redirect()->back()->with('message',"ADDED");
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
    public function update(CompanyValidation $request, $id)
    {
        $company = Company::findOrFail($id);
        $input = $request->only('name','email','website','logo');
        if($request->hasFile('logo')){
            $destination_path = 'public/companies/logo';
            $image_name = time()."_".$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs($destination_path,$image_name);

            $company->update([
                'name' => $input['name'],
                'email' => $input['email'],
                'website' => $input['website'],
                'logo' => !empty($image_name) ? $image_name : NULL ,
            ]);
        }else{
            $company->update([
                'name' => $input['name'],
                'email' => $input['email'],
                'website' => $input['website'],
            ]);
        }

        return redirect()->back()->with('message',"Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::findOrFail($id)->delete();

        return redirect()->back()->with('message',"Deleted");
    }
}
