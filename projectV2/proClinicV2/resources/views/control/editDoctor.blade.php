@extends('control.layoutedit')

@section('edit&show')
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit Doctor</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/employees">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Edit Doctor</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->

				<!-- Main Content -->
				<div class="container-fluid">

<div class="row">
	<!-- Widget Item -->
	<div class="col-md-12">
		<div class="widget-area-2 proclinic-box-shadow">
			<h3 class="widget-title">Edit Doctor</h3>
			<form action='{{route("employees.update",$employee)}}' method="post">
			@csrf
        @method("put")
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="Doctor-name">Doctor Name</label>
						<input type="text" value="{{old('name',$employee['name'])}}" class="form-control"  id="Doctor-name" name="name">
						<label class="text-danger"> {{$errors->first("name")}}</label>
					</div>
					<div class="form-group col-md-6">
						<label for="dob">Age</label>
						<input type="number" value="{{old('age',$employee['age'])}}" placeholder="Age" class="form-control" id="dob" name="age">
						<label class="text-danger"> {{$errors->first("age")}}</label>
					</div>
					<div class="form-group col-md-6">
										<label for="Department">Department</label>
										<select class="form-control" id="Department" name="department">
										@foreach($Department as $Department )
                                            <option <?php if($Department['depid']==$employee['idep']){echo 'selected';}?>>{{$Department["depname"]}}</option>
                                                 @endforeach
											
											
										</select>
									</div>
                                   
					<div class="form-group col-md-6">
						<label for="experience">Address</label>
						<input type="text" value="{{old('address',$employee['address'])}}"  placeholder="Address" class="form-control" id="address" name="address">
						<label class="text-danger"> {{$errors->first("address")}}</label>
					</div>
					
					<div class="form-group col-md-6">
						<label for="gender">Gender</label>
						<select class="form-control" id="gender" name="gender">
							<option <?php if($employee['gender']=="Male"){echo 'selected';}?>>Male</option>
							<option <?php if($employee['gender']=="Female"){echo 'selected';}?>>Female</option>
							
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="phone">Phone</label>
						<input type="text" value="{{old('phone',$employee['phone'])}}" placeholder="Phone" class="form-control" id="phone" name="phone">
						<label class="text-danger"> {{$errors->first("phone")}}</label>
					</div>
					<div class="form-group col-md-6">
						<label for="email">Email</label>
						<input type="email" value="{{old('email',$employee['email'])}}"  placeholder="email" class="form-control" id="Email" name="email">
						<label class="text-danger"> {{$errors->first("email")}}</label>
					</div>
					<div class="form-group col-md-6">
						<label for="password">Password</label>
						<input type="password" value="{{old('password',$employee['password'])}}"  class="form-control" id="pasword" name="password">
						<label class="text-danger"> {{$errors->first("password")}}</label>
					</div>
					
					<div class="form-group col-md-6">
						<label for="about-doctor">Doctor Skills</label>
						<textarea placeholder="Doctor Skills" class="form-control" id="about-doctor" rows="3" name="skills">{{old('skills',$employee['skills'])}}</textarea>
						<label class="text-danger"> {{$errors->first("skills")}}</label>
					</div>
					
					<div class="form-group col-md-12">
						<label for="file">File</label>
						<input type="file" class="form-control" id="file" name="picture" >
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
						<button type="submit" class="btn btn-primary btn-lg">Update</button>
						<a type="submit" href="/employees" class="btn btn-danger btn-lg">Cancel</a>
					</div>
				</div>
			</form>
			<!-- Alerts-->
			<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Updated Successfully!</strong> Please Check in doctors list
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Holy guacamole!</strong> You should check in on some of those fields below.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div> -->
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
			 

			<!-- </div> -->
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	@endsection