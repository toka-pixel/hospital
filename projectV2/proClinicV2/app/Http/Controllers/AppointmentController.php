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
         
        ->join("employeepatient",function($join){
            $join->on("employeepatient.patid","=","book.patid")
                ->on("employeepatient.empid","=","book.empid");
        })
      

        ->join('department','employee.idep','=','department.depid')
       
        ->select('patient.name as patientname', 'employee.name','appointment.timeapp', 'appointment.dateapp','department.depname','employeepatient.state')
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

    $allbooks=Book::all()->where('idapp',$appid[0]->appid)->where('empid',$request->input('doctor'));
     
   
      

       if(count($allbooks) > 0){
           echo "<script>alert('appointment is reserved')</script>";
       }


       else
       {

       
        $x = Employeepatient::where('empid', $request->input('doctor'))
        ->where('patid', $request["patid"])
        ->get();

                    if(count($x) > 0){
                        echo "<script>alert('you already reserved')</script>";
                    }


                    else{
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
                
                        }

           }
          
         

      
       return view('proclinic.appointment');


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
    public function update(Request $request, Employeepatient $employeepatient)
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
 
        $allbooks=Book::all()->where('idapp',$appid[0]->appid)->where('empid',$request->input('doctor'));
      
    
       
 
        if(count($allbooks) > 0){
            echo "<script>
                
            </script>";
            echo "<script>alert('appointment is reserved')</script>";
        }
 
 
        else
        {
 
        
         $x = Employeepatient::where('empid', $request->input('doctor'))
         ->where('patid', $request["patid"])
         ->get();
 
                     if(count($x) > 0){
                         
                         echo "<script>alert('you already reserved')</script>";
                     }
 
 
                     else{
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

                     
                 
                         }
 
            }
           
          
    
         return redirect(route("appointments.index"));
 
    


    }


  


    

}
