@extends('proclinic.layout')


@section('home')

<?php 
   use App\Models\Employee;
   use App\Models\Department;
   $employees= Employee::all(); 
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('proclinic/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
<h1 class="mb-2 bread">Qualified Doctors</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Doctor <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container">
<div class="row">
@foreach($employees as  $employee) 
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<img class="img align-self-stretch" src="../proclinic/images/{{$employee['image']}}">
</div>
<div class="text pt-3 text-center">
<h3><a href="{{route('showdocprofile',$employee['idemployee'])}}">Dr. {{ $employee->name }} </a></h3>
<span class="position mb-2">
  <?php 
     $depname = DB::table('employee')
     ->join('department','employee.idep', '=', 'department.depid')
     ->where('employee.idep',$employee->idep )
     ->select('department.depname')
     ->get()->first();
    

     echo $depname->{'depname'};
  ?>
</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
@endforeach 

<!-- <div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-2.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Rachel Parker</a></h3>
<span class="position mb-2">Ophthalmologist</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-3.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Ian Smith</a></h3>
<span class="position mb-2">Dentist</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-4.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Alicia Henderson</a></h3>
<span class="position mb-2">Pediatrician</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-5.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Lloyd Wilson</a></h3>
<span class="position mb-2">Neurologist</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-6.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Rachel Parker</a></h3>
<span class="position mb-2">Ophthalmologist</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-7.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href="/doctorProfile">Dr. Ian Smith</a></h3>
<span class="position mb-2">Dentist</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(proclinic/images/doc-8.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3><a href='/doctorProfile'>Dr. Alicia Henderson</a></h3>
<span class="position mb-2">Pediatrician</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

 </div>
</div>
</div>
</div> -->
</div>
</div>
</section>
@endsection