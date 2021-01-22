@extends('control.layoutedit')

@section('edit&show')
  <!-- Page Title -->
  <div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Doctor Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/employees">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Doctor Details</li>
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
                            <h3 class="widget-title">Doctor Details</h3>
                            <div class="row no-mp">
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="../control/images/{{$employee['image']}}" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Dr. {{$employee["name"]}}</h4>
                                            <p class="card-text">{{$employee["skills"]}}</p>
                                            <a type="button" class="btn btn-success mb-2" href='{{route("employees.edit",$employee)}}'>
                                            <span class="ti-pencil-alt"></span> Edit Doctor</a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Department</strong></td>
                                                    <td>{{$dep['depname']}}</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td><strong>Gender</strong></td>
                                                    <td>{{$employee["gender"]}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Address</strong></td>
                                                    <td>{{$employee["address"]}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone</strong> </td>
                                                    <td>{{$employee["phone"]}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Age</strong> </td>
                                                    <td>{{$employee["age"]}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email</strong></td>
                                                    <td>{{$employee["email"]}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--Export links-->
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center export-pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- /Export links-->
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title">Doctor Activity</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Visit Date</th>
                                            <th>Visit time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookApp as $bookApp )
                                        <tr>
                                            <td>{{$bookApp["name"]}}</td>
                                            <td>{{$bookApp["dateapp"]}}</td>
                                            <td>{{$bookApp["timeapp"]}}</td>
                                            <td><span class="badge badge-warning">{{$bookApp["state"]}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                
   
    </div>
    </div>
    </div>


@endsection