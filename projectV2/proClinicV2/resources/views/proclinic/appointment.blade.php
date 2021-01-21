@extends('proclinic.layout')


@section('home')
<section class="hero-wrap hero-wrap-2" style="background-image: url('proclinic/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
<h1 class="mb-2 bread">Appointment</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(proclinic/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row">
<div class="col-md-6 py-5 pr-md-5">
<div class="heading-section heading-section-white ftco-animate mb-5">
<span class="subheading">APPOINTEMENT</span>
<h2 class="mb-4">BOOK APPOINTEMENT</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<form action="#" class="appointment-form ftco-animate">
<div class="d-md-flex">
<div class="form-group">
<input type="text" class="form-control" placeholder="First Name">
</div>
 <div class="form-group ml-md-4">
<input type="text" class="form-control" placeholder="Last Name">
</div>
</div>
<div class="d-md-flex">
<div class="form-group">
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="" id="" class="form-control">
<option value="">Select Your Services</option>
<option value="">Neurology</option>
<option value="">Cardiology</option>
<option value="">Dental</option>
<option value="">Ophthalmology</option>

</select>
</div>
</div>
</div>
<div class="form-group ml-md-4">
<input type="text" class="form-control" placeholder="Phone">
</div>
</div>
<div class="d-md-flex">
<div class="form-group">
<div class="input-wrap">
<div class="icon"><span class="ion-md-calendar"></span></div>
<input type="text" class="form-control appointment_date" placeholder="Date">
</div>
</div>
<div class="form-group ml-md-4">
<div class="input-wrap">
<div class="icon"><span class="ion-ios-clock"></span></div>
<input type="text" class="form-control appointment_time" placeholder="Time">
</div>
</div>
</div>
<div class="d-md-flex">
<!-- <div class="form-group">
<textarea name="" id=""  class="form-control" placeholder="Message"     ></textarea>
</div> -->
<div class="form-group " style="margin-top: 3px;">
  <!-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> -->
  <select name="" id="" class="form-control">
  <option value="">Select Your Doctor</option>
  <option value="">ali ahmed</option>
  <option value="">mohamed ahmed</option>
  <option value="">mai mohamed</option>
  <option value="">omar zaher</option>
  <option value="">hend ahmed</option>
  </select>
  </div>
  <div class="form-group ml-md-4">
    <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4" >
    </div>

</div>

</form>
</div>
<div class="col-lg-6 p-5 bg-counter aside-stretch">
<h3 class="vr">About proclinic Facts</h3>
<div class="row pt-4 mt-1">
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 p-5 bg-light">
<div class="text">
<strong class="number" data-number="30">0</strong>
<span>Years of Experienced</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 p-5 bg-light">
 <div class="text">
<strong class="number" data-number="4500">0</strong>
<span>Happy Patients</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 p-5 bg-light">
<div class="text">
<strong class="number" data-number="84">0</strong>
<span>Number of Doctors</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 p-5 bg-light">
<div class="text">
<strong class="number" data-number="300">0</strong>
<span>Number of Staffs</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection