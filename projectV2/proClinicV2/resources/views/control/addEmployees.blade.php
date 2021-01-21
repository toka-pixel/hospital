@extends('control.layoutadd')


@section('home')
<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Doctor</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Add Doctor</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Doctor</h3>
							<form action="{{route('employees.store')}}" method="Post"> 
							@csrf
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Doctor-name">Doctor Name</label>
										<input type="text" class="form-control" placeholder="Doctor name" id="Doctor-name" name="name" value="{{old('name')}}">
										<label class="text-danger"> {{$errors->first("name")}}</label>
									</div>
									
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="number" placeholder="Age" class="form-control" id="age" name="age" value="{{old('age')}}">
										<label class="text-danger"> {{$errors->first("age")}}</label>
									</div>
									
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text" placeholder="Phone" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
										<label class="text-danger"> {{$errors->first("phone")}}</label>
									</div>
									<div class="form-group col-md-6">
										<label for="about-doctor">Address</label>
										<input placeholder="Address" type='text' class="form-control" id="about-doctor" rows="3" name="address" value="{{old('address')}}">
										<label class="text-danger"> {{$errors->first("address")}}</label>
                                    </div>
									
								
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" placeholder="email" class="form-control" id="Email" name="email" value="{{old('email')}}">
										<label class="text-danger"> {{$errors->first("email")}}</label>
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" id="gender" name="gender" value="{{old('gender')}}">
											<option>Male</option>
											<option>Female</option>
											
										</select>
										
									</div>
									<div class="form-group col-md-6">
										<label for="password">Password</label>
										<input type="password" placeholder="password" class="form-control" id="password" name="password" value="{{old('password')}}">
										<label class="text-danger"> {{$errors->first("password")}}</label>
									</div>
									<div class="form-group col-md-6">
										<label for="Department">Department</label>
										<select class="form-control" id="Department" name="department" value="{{old('department')}}">
										@foreach($Department as $Department )
                                            <option>{{$Department["depname"]}}</option>
                                                 @endforeach
											
											
										</select>
									</div>
                                   
	
									
                                    <div class="form-group col-md-6">
										<label for="Skills">Skills</label>
										<textarea placeholder="Skills" class="form-control" id="Skills" rows="3" name="skills" value="{{old('skills')}}"></textarea>
										<label class="text-danger"> {{$errors->first("skills")}}</label>
									</div>
									
									
									<div class="form-group col-md-12">
										<label for="file">Profile Picture</label>
										<input type="file" class="form-control" id="file" name="picture" value="{{old('picture')}}">
										<label class="text-danger"> {{$errors->first("picture")}}</label>
									</div>
			
									
																		
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Please Check in doctors list
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
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
@endsection