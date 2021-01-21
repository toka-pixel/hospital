@extends('control.layoutadd')

@section('home')


<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Appointment</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Add Appointment</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

			<?php 
			use App\Models\Appointment;
            use App\Models\Department;
			use App\Models\Patient;
			use App\Models\Employee;

			$departments= Department::all();
			$employees= Employee::all();
			$patients= Patient::all();

			$appdates= Appointment::all()->unique('dateapp');
			$apptimes= Appointment::all()->unique('timeapp');

             ?>

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Appointment</h3>
							<form action="{{route('AppFromAdmin')}}" method='get'>
							@csrf
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
                                        <!-- <input type="text" class="form-control" placeholder="Patient ID" id="patient-id"> -->
                                        <select class="form-control " name="patid" required>
                                            <option value="0" disabled="true" selected="true">Select Name</option>
                                                @foreach( $patients as  $patient) 
                                            <option value="{{ $patient->idpatient }}">{{ $patient->name }}</option>
                                                @endforeach 


                                        </select>
                                        
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
                                        <select class="form-control department" name="department" required>
                                            <option value="0" disabled="true" selected="true">Select Department</option>
                                                @foreach($departments as $dept) 
                                            <option value="{{ $dept->depid }}">{{ $dept->depname }}</option>
                                                @endforeach 


                                        </select>
									</div>
									<div class="form-group col-md-6">
                                        <label for="doctor-name">Doctor Name</label>
                                        <select class="form-control doctor" name="doctor" required>
                                        <option value="0" disabled="true" selected="true">choose Doctor</option>
                                         </select>
										
									</div>
									<div class="form-group col-md-6">
										<label for="appointment-date">Appointment Date</label>
										<select class="form-control" name='date' >
                                          <option value="0" disabled="true" selected="true"> Date</option>
											@foreach($appdates as $app) 
												<option  > {{ $app->dateapp }}  </option>
											@endforeach 


										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="time-slot">Time </label>
										<select class="form-control" name='time' required>
                                         <option value="0" disabled="true" selected="true"> Time</option>
											@foreach($apptimes as $app) 
												<option  >  {{ $app->timeapp }}</option>
											@endforeach 


										</select>
																				
									</div>
									<div class="form-group col-md-6">
									
									</div>
									<div class="form-group col-md-12">
									
									</div>
																		
									<div class="form-check col-md-12 mb-2">
										
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Appointment token Generated
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection('section')