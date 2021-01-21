@extends('proclinic.layout')


@section('home')
<section class="hero-wrap hero-wrap-2" style="background-image: url('proclinic/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Doctor Profile</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Doctor Profile<i class="ion-ios-arrow-forward"></i></span></p>
                </div>
                </div>
                </div>
                </section>

          <!-- Main Content -->
			<div class="container">

                <div class="row">
                    <!-- Widget Item -->
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title">Doctor Details</h3>
                            <div class="row no-mp">
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="proclinic/images/bg_2.jpg" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Dr Daniel Smith</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the
                                                bulk of the
                                                card's
                                                content.</p>
                                            <!-- <button type="button" class="btn btn-success mb-2"><span class="ti-pencil-alt"></span> Edit
                                                Doctor</button>
                                            <button type="button" class="btn btn-danger"><span class="ti-trash"></span> Delete
                                                Doctor</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Specialization</strong></td>
                                                    <td>General Physician</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Experience</strong></td>
                                                    <td>14 Years</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Gender</strong></td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Address</strong></td>
                                                    <td>Koramangala
                                                        Banglore, India</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone</strong> </td>
                                                    <td>+91 11111 11111</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Date Of Birth</strong> </td>
                                                    <td>26-10-1989</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email</strong></td>
                                                    <td>your@email.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--Export links-->
                                    
                                        <!-- /Export links-->
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
                   
                    <!-- /Widget Item -->
                </div>
			</div>
			<!-- /Main Content -->
@endsection