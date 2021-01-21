@extends('control.layoutedit')
@section('home')
    <!-- Page Title -->
			<div class="row no-margin-padding container-fluid">
				<div class="col-md-6">
					<h3 class="block-title">Patient Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/patients">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Patient Details</li>
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
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Patient Details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>											
                                    <td><strong>Name</strong></td>
                                    <td>{{$patient["name"]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Age</strong> </td>
                                    <td>{{$patient["age"]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Gender</strong></td>
                                    <td>{{$patient["gender"]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Address</strong></td>
                                    <td>{{$patient["address"]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Phone </strong></td>
                                    <td>{{$patient["phone"]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>{{$patient["email"]}}</td>
                                </tr>									
                            </tbody>
                        </table>
                    </div>
                     <!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
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
                            <a  class="btn btn-success mb-3" href='{{route("patients.edit",$patient)}}'><span class="ti-pencil-alt"></span> Edit Patient</a>
                            <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete Patient</button>
                            <button type="button" class="btn btn-info mb-3"><span class="ti-arrow-down"></span> Download File</button>
						</div>
					</div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
                    <div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Visits</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>										
											<th>Doctor Name</th>
											<th>Medecine</th>
											<th>Visit Date</th>
											<th>Status</th>
											
										</tr>
									</thead>
									<tbody>
									   @foreach($patientdetail as $patientde)
										<tr>											
											<td>{{$patientde["name"]}}</td>
											<td>{{$patientde["medicine"]}}</td>
											<td>{{$patientde["dateapp"]}}</td>
											<td>{{$patientde["state"]}}</td>
											
										</tr>
										
									  @endforeach									
									</tbody>
								</table>
								
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
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
                    
    </div> <!--  container -->
@endsection