@extends('control.layoutDoctor')
@section("edit&show")
<!-- Page Title -->
<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Patient Status</h3>
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
             <div class="container">
             <form action='{{route("emppatients.update",$Employeepatient["patid"])}}' method="post" style="margin-top:30px;">
			@csrf
        @method("put")
		<div class="form-row">
        <h4 class="form-group col-md-12"><span style="color:#007bff;">Patient Name : </span>{{$Employeepatient['name']}}</h4>
		<h5 class="form-group col-md-12"><span style="color:#007bff;">Patient Age : </span>{{$Employeepatient['age']}}</h5>
		</div>
				<div class="form-row">
				
                <div class="form-group col-md-12">
						<label for="about-doctor">Medicine</label>
						<textarea placeholder="Enter Medecines" class="form-control" id="about-doctor" rows="3" name="medicine">{{old('medicine')}}</textarea>
						<label class="text-danger"> {{$errors->first("medicine")}}</label>
					</div>
					<div class="form-group col-md-6">
						<label for="gender">Status</label>
						<select class="form-control" id="status" name="status">
							<option <?php if($Employeepatient['status']=="Active"){echo 'selected';}?>>Active</option>
							<option <?php if($Employeepatient['status']=="Done"){echo 'selected';}?>>Done</option>
							
						</select>
					</div>
                    <div class="form-group col-md-6"></div>
				
					<div class="form-group col-md-6 mb-3">
						<button type="submit" class="btn btn-primary btn-lg">Update</button>
						<a type="submit" class="btn btn-danger btn-lg" href="/emppatients">Cancel</a>
					</div>
					

				</div>
			</form>
        <div>



@endsection