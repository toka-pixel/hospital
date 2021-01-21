@extends('control.layout')


@section('home')


			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Doctors</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="/employees">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">All Doctors</li>
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
							<h3 class="widget-title">Doctors List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped " style="text-align:center">
									<thead>
                                    
										<tr>
											<!-- <th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th> -->
											<th>Doctor Name</th>
											<th>Doctor Address</th>
											<th>Age <small>(in Years)</small></th>
											<th>Phone</th>
											<th>Department</th>
											<th>Availability</th>
											<th>Delete</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
									@foreach($Employee as $Employee )
										<tr>
											<!-- <td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="1">
													<label class="custom-control-label" for="1"></label>
												</div>
											</td> -->
                                           
											<td> <a class="btn btn-link text-info" href='{{route("employees.show",$Employee)}}' >{{$Employee["name"]}}</a></td>
											<td> {{$Employee["address"]}}</td>
											<td> {{$Employee["age"]}}</td>
											<td>{{$Employee["phone"]}}</td>
											<td>{{$Employee["depname"]}}</td>
											<td>
												<span class="badge badge-success">Available</span>
											</td>
											<td>
											<form action='{{route("employees.destroy",$Employee)}}' method="post">
                                                      @csrf
                                                     @method("delete")
						    <input class="btn btn-danger mt-0 mb-0 " type="submit" value="Delete">
							<!-- <input type="submit" value="Delete"  class="btn btn-danger" > -->
                                        </form>
											
								 </td>
								 <td>
								<a type="button" class="btn btn-primary mt-0 mb-0" href='{{route("employees.edit",$Employee)}}'>
								<span class="ti-pencil-alt"></span> EDIT</a>
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
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	
    

@endsection