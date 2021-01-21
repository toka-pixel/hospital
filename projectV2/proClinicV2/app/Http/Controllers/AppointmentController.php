<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Book;
use App\Models\Employeepatient;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $books = DB::table('book')
        ->join('patient', 'book.patid', '=', 'patient.idpatient')
        ->join('employee', 'book.empid', '=', 'employee.idemployee')
        ->join('appointment', 'appointment.appid', '=', 'book.idapp')

        // ->join( 'employeepatient','employeepatient.patid' ,'=','book.patid')
        // ->where('employeepatient.empid','book.empid')

        ->join('department','employee.idep','=','department.depid')
       
        ->select('patient.name as patientname', 'employee.name','appointment.timeapp', 'appointment.dateapp','department.depname')
        ->get();
       
        $books = json_decode( $books, true);
        return view("control.appointments",["books"=>$books]);

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('control.addAppointment');

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

       // store appointment of patient in book table

       $appid = Appointment::where('timeapp', $request->input('time'))
       ->where('dateapp', $request->input('date'))
       ->get();


       try {

        Book::updateOrCreate([
            "empid"=>$request->input('doctor'),
            "patid"=>$request["patid"],
            "idapp"=>$appid[0]->appid
        ]);
        Employeepatient::updateOrCreate([
            "empid"=>$request->input('doctor'),
            "patid"=>$request["patid"],
             "state"=>"Active"
        ]);


       return view('proclinic.appointment');
      }
       catch (Illuminate\Database\QueryException $e){
        $errorCode = $e->errorInfo[1];
    
            return 'Duplicate Entry';
       
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }



    // departments ///////////


    public  function docofdepartment(Request $request) {
       

        $data=Employee::select('name','idemployee')->where('idep',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success

    }


    // add appointment from admin /////////

    public function AddAppointmentFromAdmin(Request $request){

        $appid = Appointment::where('timeapp', $request->input('time'))
        ->where('dateapp', $request->input('date'))
        ->get();
 
     
      
 
        // $book2 = new Book;
        // $book2->empid=$request->input('doctor');
        // $book2->patid=$request->input('patid');
        // $book2->idapp=$appid[0]->appid;

        // $book2->save();

        //    dd( $book2);

        Book::updateOrCreate([
            "empid"=>$request->input('doctor'),
            "patid"=>$request["patid"],
            "idapp"=>$appid[0]->appid
        ]);

       
         $y=Employeepatient::updateOrCreate([
             "empid"=>$request->input('doctor'),
             "patid"=>$request->input("patid"),
              "state"=>"Active"
         ]);

         
    
         return redirect(route("appointments.index"));
 
        // return view('control.appointments');


    }


    

}
