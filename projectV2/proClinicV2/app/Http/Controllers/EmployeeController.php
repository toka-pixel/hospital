<?php

namespace App\Http\Controllers;

use App\Models\Employee;
 use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Employee= Employee::all()->where('job', 'doctor');
        $Employee=Employee:: join ('department' ,'department.depid','=','employee.idep')
        ->where ('employee.job','doctor')
        ->get (['department.depname','department.depid','employee.*']);
        
         return view("control.employees",["Employee"=>$Employee]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Department= Department::all();
        return view("control.addEmployees",["Department"=>$Department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $dep1= Department::all()->where('depname', $request["department"]);
    //    $dep= Department::all()->where('depname', '=', $request["department"]);
            //   $depID=$dep1[0]["depid"];
            //   echo( $dep1);
              for ($i=0; $i <5 ; $i++) { 
                if (isset($dep1[$i])){$depID=$dep1[$i]["depid"];}
               
              }
            //if ($dep1['0']=''){echo "ok";}elseif($dep1["3"]){echo "not ok";}
            //validate input
            $request->validate([
                "name"=>"required|min:3",   # $request["name"] ! = ""
                "email"=>"required|email",
                "age"=>"numeric|required",
                "phone"=>"required",
                "address"=>"required",
               
                "password"=>"required|min:3",
                
                "skills"=>"required",
                "picture"=>"required",
            ]);


           Employee::create([
            "name"=>$request["name"],
            "address"=>$request["address"],
            "phone"=>$request["phone"],
            "age"=>$request["age"],
            "email"=>$request["email"],
            "gender"=>$request["gender"],
            "password"=>$request["password"],
            "skills"=>$request["skills"],
            "image"=>$request["picture"],
            "job"=>"doctor",
              "idep"=> $depID,
            
        ]);
         return redirect(route("employees.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //get department name
        $dep=Employee:: join ('department' ,'department.depid','=','employee.idep')
        ->where ('employee.idep',$employee["idep"])
        ->get (['department.depname']);
        //get appointement and patient of a doctor
        $bookApp = DB::table('book')
            ->join('patient', 'book.patid', '=', 'patient.idpatient')
            ->join('appointment', 'book.idapp', '=', 'appointment.appid')
            ->join('employeepatient', 'book.patid', '=', 'employeepatient.patid')
            ->where('employeepatient.empid',$employee['idemployee'])
             ->where('book.empid',$employee['idemployee'])
            ->select('patient.name', 'appointment.dateapp','appointment.timeapp', 'employeepatient.state')
            ->get();
            // var_dump($bookApp);
            
            $bookApp = json_decode($bookApp, true);

        //return view
      return view("control.doctorProfile",["employee"=>$employee,"dep"=>$dep[0],"bookApp"=>$bookApp]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $Department= Department::all();
        return view("control.editDoctor",["employee"=>$employee,"Department"=>$Department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $dep1= Department::all()->where('depname', $request["department"]);
        for ($i=0; $i <5 ; $i++) { 
            if (isset($dep1[$i])){$depID=$dep1[$i]["depid"];}
           
          }
          //validate
          $request->validate([
            "name"=>"required|min:3",   # $request["name"] ! = ""
            "email"=>"required|email",
            "age"=>"numeric|required",
            "phone"=>"required",
            "address"=>"required",
            "password"=>"required|min:3",
            "skills"=>"required",
            "picture"=>"required",
        ]);
        $employee->update([
            "name"=>$request["name"],
            "address"=>$request["address"],
            "phone"=>$request["phone"],
            "age"=>$request["age"],
            "email"=>$request["email"],
            "gender"=>$request["gender"],
            "password"=>$request["password"],
            "skills"=>$request["skills"],
            "image"=>$request["picture"],
            "job"=>"doctor",
            "idep"=> $depID,
        ]);
         return redirect(route("employees.index"));
        //  return redirect(route("employees.show",["post"=>$employee]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $Employee)
    {
        // dd($Employee);
        $Employee->delete();
        return redirect(route("employees.index"));
    }
    //login Employee
    function loginEmp(Request $req)
    {
        $employee= Employee::where('email',$req->email)->where('password',$req->password)->where('job','doctor')->first();
        // return $employee;
        
        if(!$employee )
        {
            echo '<script>alert("email or password is not matched")</script>'; 
           return view('loginEmp');
           
        }
        else{
            $req->session()->put('employee',$employee);
            return redirect('/emppatients');
        }
    }
    
    
}
