@extends('control.layoutDoctor2')


@section('home')
<!-- Page Title -->
<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Doctor Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/emppatients">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctor</li>
						<li class="breadcrumb-item active">{{Session::get('employee')['name']}}</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->
             <!-- /Widget Item -->
                    <!-- Widget Item -->
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title">Doctor Activity</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Visit Date</th>
                                            <th>Visit time</th>
                                            <th>Status</th>
                                            <th>Prescription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookApp as $bookApp )
                                   
                                        <tr>
                                            <td>{{$bookApp["name"]}}</td>
                                            <td>{{$bookApp["dateapp"]}}</td>
                                            <td>{{$bookApp["timeapp"]}}</td>
                                            <td ><span class="badge badge-warning">{{$bookApp["state"]}}</span></td>
                                            <td>
                               
								<a type="button" class="btn btn-primary mt-0 mb-0"
                                 href='{{route("editMedecine",$bookApp["idpatient"])}}'>
                                 
                              
                                <!-- $rs->${$empId.$bookApp["idpatient"]} -->
								<span class="ti-pencil-alt"></span> EDIT</a>
											</td>
                                        </tr>
                                      
                                        @endforeach
                                    </tbody>
                                </table>
                
   
    </div>
    </div>
    </div>
    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title"> Activity History</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Visit Date</th>
                                            <th>Visit time</th>
                                            <th>Status</th>
                                            <th>Prescription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookApp2 as $bookApp2 )
                                        <tr>
                                            <td>{{$bookApp2["name"]}}</td>
                                            <td>{{$bookApp2["dateapp"]}}</td>
                                            <td>{{$bookApp2["timeapp"]}}</td>
                                            <td><span class="badge badge-success">{{$bookApp2["state"]}}</span></td>
                                            <td>{{$bookApp2["medicine"]}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                
   
    </div>
    </div>
    </div>

@endsection