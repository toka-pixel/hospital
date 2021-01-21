@extends('control.layoutedit')
@section('home')
<!-- Page Title -->
<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit Patient</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/patients">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Edit Patient</li>
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
            <h3 class="widget-title">Edit Patient</h3>
            <form action="{{route('patients.update',$patient)}}" method="Post"> 
                   @csrf
                   @method("put")
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="patient-name">Patient Name</label>
                        <input  name="namepat" type="text" value="{{old('namepat',$patient['name'])}}" class="form-control" placeholder="Patient name" id="patient-name">
                        <label class="text-danger"> {{$errors->first("namepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dob">Password</label>
                        <input name="passwordpat"  type="password" value="{{old('passwordpat',$patient['password'])}}" placeholder="" class="form-control" id="dob">
                        <label class="text-danger"> {{$errors->first("passwordpat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age">Age</label>
                        <input  name="agepat" type="text" value="{{old('agepat',$patient['age'])}}" placeholder="Age" class="form-control" id="age">
                        <label class="text-danger"> {{$errors->first("agepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input  name="phonepat"type="text" value="{{old('phonepat',$patient['phone'])}}" placeholder="Phone" class="form-control" id="phone">
                        <label class="text-danger"> {{$errors->first("phonepat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input  name="emailpat" type="email" value="{{old('emailpat',$patient['email'])}}" placeholder="email" class="form-control" id="Email">
                        <label class="text-danger"> {{$errors->first("emailpat")}}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="genderpat">
                        
                        <option <?php if ($patient['gender'] == 'Male') { echo 'selected';} ?>>Male</option>
                        <option <?php if ($patient['gender'] == 'Female') {echo 'selected';} ?>>Female</option>
    
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea  name="addresspat" placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('addresspat',$patient['address'])}}</textarea>
                        <label class="text-danger"> {{$errors->first("addresspat")}}</label>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="file">File</label>
                        <input  name="filepat" type="file" class="form-control" id="file" value="{{old('filepat',$patient['imagepatient'])}}">
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
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                </div>
            </form>
            <!-- Alerts-->
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Updated!</strong> Please add payment now
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