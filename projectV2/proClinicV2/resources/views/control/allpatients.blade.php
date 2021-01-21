@extends('control.layout')
@section('home')
<div class="row no-margin-padding container-fluid">
				<div class="col-md-6">
					<h3 class="block-title">Patients</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/contro">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">All Patients</li>
					</ol>
				</div>
</div>
<div class="container">
<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patients List</h3>							
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											
											<th>Patient ID</th>
											<th>Patient Name</th>
											<th>Age</th>
											<th>Phone</th>
											<th>Blood Type</th>
											<th>Chronic Disease</th>
											<th>Show</th>
											<th>Edit</th>
											
											<th>Delete</th>
										
										</tr>
									</thead>
									<tbody>
                                        @foreach($patients as $patient)
                                        <tr>
                                            <td>
                                                {{$patient->idpatient}}
                                           
                                            </td>
                                            <td>
                                                {{$patient->name}}
                                           
                                            </td>
                                            <td>
                                                {{$patient->age}}
                                           
                                            </td>
                                            <td>
                                                {{$patient->phone}}
                                           
                                            </td>
                                            <td>
                                                {{$patient->bloodtype}}
                                           
                                            </td>
                                            <td>
                                                {{$patient->chronicDiseases}}
                                           
                                            </td>
											<td>
												<a href="{{route('patients.show',$patient)}}" class="btn btn-success">
													Show 
												</a>
											</td>
											<td>						
					
											<a type="button" class="btn btn-primary mt-0 mb-0" href='{{route("patients.edit",$patient)}}'>
                                                <span class="ti-pencil-alt"></span> EDIT</a>
											</td>
											<td>
												<form action="{{route('patients.destroy',$patient)}}" method="Post">
													@csrf
													@method("delete")
													
														<input class="btn btn-danger mt-0 mb-0 " type="submit" value="Delete">
												</form>
											</td>
						

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
								<!-- <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
								<button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button> -->
							</div>
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