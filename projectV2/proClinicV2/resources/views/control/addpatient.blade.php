@extends('control.layoutadd')
@section('home')
            <!-- Page Title -->
			<div class="row no-margin-padding container-fluid">
				<div class="col-md-6">
					<h3 class="block-title">Add Patient</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/patients">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Add Patient</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->
    <div class="container">
    <!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

<div class="row">
    <!-- Widget Item -->
    <div class="col-md-12">
        <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Add Patient</h3>
            <form action="{{route('patients.store')}}" method="POST">
                  @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="patient-name">Patient Name</label>
                        <input  value="{{old('namepat')}}" type="text" class="form-control" placeholder="Patient name" id="patient-name" name="namepat">
                        <label class="text-danger"> {{$errors->first("namepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="patient-password">Password</label>
                        <input  value="{{old('passwordpat')}}"type="password" class="form-control" placeholder="Patient password" id="patient-password" name="passwordpat">
                        <label class="text-danger"> {{$errors->first("passwordpat")}}</label>
                    </div>
             
                    <div class="form-group col-md-6">
                        <label for="age">Age</label>
                        <input  value="{{old('agepat')}}"type="text" placeholder="Age" class="form-control" id="age" name="agepat">
                        <label class="text-danger"> {{$errors->first("agepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input value="{{old('phonepat')}}" type="text" placeholder="Phone" class="form-control" id="phone" name="phonepat">
                        <label class="text-danger"> {{$errors->first("phonepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input value="{{old('emailpat')}}" type="email" placeholder="email" class="form-control" id="Email" name="emailpat">
                        <label class="text-danger"> {{$errors->first("emailpat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disease">Chronic Disease</label>
                        <input  value="{{old('chronpat')}}" type="text" placeholder="Chronic Disease" class="form-control" id="disease" name="chronpat">
                        <label class="text-danger"> {{$errors->first("chronpat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="genderpat">
                            <option>Male</option>
                            <option>Female</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Blood Type</label>
                        <select class="form-control" id="gender" name="bloodpat">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea  value="{{old('addresspat')}}" name="addresspat" placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label class="text-danger"> {{$errors->first("addresspat")}}</label>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="file">File</label>
                        <input  value="{{old('filepat')}}" type="file" class="form-control" id="file" name="filepat">
                        <label class="text-danger"> {{$errors->first("filepat")}}</label>
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
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Done!</strong> Please add payment now
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
    </div>

@endsection