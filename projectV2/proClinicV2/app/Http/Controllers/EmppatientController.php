<?php

namespace App\Http\Controllers;

use App\Models\Employeepatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class EmppatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empId= Session::get('employee')['idemployee'];
        //  $Employeepatient= Employeepatient::all()->where('empid',$empId) ->where('employeepatient.state','active');
       
      $bookApp = DB::table('book')
        ->join('patient', 'book.patid', '=', 'patient.idpatient')
        ->join('appointment', 'book.idapp', '=', 'appointment.appid')
        ->join('employeepatient', 'book.patid', '=', 'employeepatient.patid')
        ->where('employeepatient.empid',$empId)
         ->where('book.empid',$empId)
          ->where('employeepatient.state','active')
        ->select('patient.name','patient.idpatient', 'appointment.dateapp','appointment.timeapp', 'employeepatient.state','employeepatient.medicine')
        ->get();
        //var_dump($bookApp);
        $bookApp = json_decode($bookApp, true);
        //state=done
        $bookApp2 = DB::table('book')
        ->join('patient', 'book.patid', '=', 'patient.idpatient')
        ->join('appointment', 'book.idapp', '=', 'appointment.appid')
        ->join('employeepatient', 'book.patid', '=', 'employeepatient.patid')
        ->where('employeepatient.empid',$empId)
         ->where('book.empid',$empId)
          ->where('employeepatient.state','done')
        ->select('patient.name', 'appointment.dateapp','appointment.timeapp', 'employeepatient.state','employeepatient.medicine')
        ->get();
        $bookApp2 = json_decode($bookApp2, true);
         return view("doctorAppointment",["bookApp"=>$bookApp,'bookApp2'=>$bookApp2]);


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
     * @param  \App\Models\Employeepatient  $employeepatient
     * @return \Illuminate\Http\Response
     */
    public function show(Employeepatient $employeepatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employeepatient  $employeepatient
     * @return \Illuminate\Http\Response
     */
    public function edit($id1)
    {
         
        // return $id1;
        $empId= Session::get('employee')['idemployee'];
        $Employeepatient = Employeepatient::join('patient', 'employeepatient.patid', '=', 'patient.idpatient')
        ->where('employeepatient.empid',$empId)
        ->where('employeepatient.patid',$id1)
               ->get(['employeepatient.*', 'patient.name','patient.age']);
            //  return $Employeepatient[0];
             $Employeepatient=$Employeepatient[0];
                return view('editMedecineS',["Employeepatient"=>$Employeepatient]);
        
        //return view("doctorAppointment",["Employeepatient"=>$Employeepatient]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employeepatient  $employeepatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$EmpId2)
    {
        $request->validate([ 
            "medicine"=>"required", 
        ]);

        $empId= Session::get('employee')['idemployee'];
       $Employeepatient= Employeepatient::where('empid', $empId)
        ->where('patid', $EmpId2)
       ->update([
           'medicine' => $request['medicine'],
           'state' => $request['status'],
        ]);
    // return $Employeepatient;
    // return redirect("/emppatients");
    return redirect(route("emppatients.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employeepatient  $employeepatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employeepatient $employeepatient)
    {
        //
    }






}
