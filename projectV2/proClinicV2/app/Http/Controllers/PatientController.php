<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients=Patient ::all();
        
        return view("control.allpatients",["patients"=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("control.addpatient");
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
        $request->validate([
            "namepat"=>"required|min:3", 
            "passwordpat"=>"required|min:3",
            "agepat"=>"numeric",
            "phonepat"=>"required",
            "emailpat"=>"required|email",
            "chronpat"=>"required",
            "addresspat"=>"required",
            "filepat"=>"required"
            
        ]);
        Patient::create([
            "name"=>$request["namepat"],
            "password"=>$request["passwordpat"],
            "age"=>$request["agepat"],
            "phone"=>$request["phonepat"],
            "email"=>$request["emailpat"],
            "chronicDiseases"=>$request["chronpat"],
            "bloodtype"=>$request["bloodpat"],
            "gender"=>$request["genderpat"],
            "address"=>$request["addresspat"],
            "imagepatient"=>$request["filepat"]
        ]);
        return redirect(route("patients.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        // dd($patient["idpatient"]);
    //    dd($patient); join('posts', 'posts.user_id', '=', 'users.id')
     // echo ($patientdetail);
        // var_dump (isset($patientdetail["name"]));
        // echo ($patientdetail[0]["name"]);
        $patientdetail=Patient:: join ('employeepatient' ,'employeepatient.patid','=','patient.idpatient')
        ->join ('employee','employee.idemployee','=','employeepatient.empid')
        
        ->join('book','employee.idemployee','=','book.empid') 
        ->join ('appointment','book.idapp','=','appointment.appid')
        ->where ('patient.idpatient',$patient["idpatient"])
        ->where ('book.patid',$patient["idpatient"])
        ->get (['employee.name','employeepatient.medicine','employeepatient.state','appointment.dateapp']);
       

        return view("control.showpatient",["patient"=>$patient,"patientdetail"=>$patientdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        return view("control.editpatient",["patient"=>$patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $request->validate([
            "namepat"=>"required|min:3", 
            "passwordpat"=>"required|min:3",
            "agepat"=>"numeric",
            "phonepat"=>"required",
            "emailpat"=>"required|email",
            "genderpat"=>"required",
            "addresspat"=>"required",
            "filepat"=>"required"
            
        ]);
        $patient->update([
            "name"=>$request["namepat"],
            "password"=>$request["passwordpat"],
            "age"=>$request["agepat"],
            "phone"=>$request["phonepat"],
            "email"=>$request["emailpat"],
            "address"=>$request["addresspat"],
            "imagepatient"=>$request["filepat"]
        ]);
        return redirect(route("patients.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();
        return redirect(route("patients.index"));
    
    }
}
