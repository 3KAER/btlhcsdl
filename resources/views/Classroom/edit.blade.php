@extends('layouts.app')

@section('content')

<br> <br> <br> <br> 
<head>
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  
     <!-- content -->
     <div class="container">
<form class="card-body" method="post" action="{{route('classroom.update',$classroom->id)}}">
@csrf
@method('PUT')
<div class="card">
<h1 class="text-primary p-2 h3" > CẬP NHẬT THÔNG TIN SINH VIÊN</h1>
<div class="mb-3 row">
    <div class="col-md-6">
         <label>Subject</label> <input class="form-control" value="{{$classroom->subject}}"name="subject" >
    </div>
    <div class="col-md-6">
         <label>Num_of_class</label> <input class="form-control"value="{{$classroom->num_of_class}}" name="lastname" type="text">
    </div>
    <div class="col-md-6">
         <label>Address</label> <input class="form-control"value="{{$classroom->address}}" name="address" type="text">
    </div>
    <div class="col-md-6">
         <label>Salary</label> <input class="form-control"value="{{$classroom->salary}}" name="salary" type="text">
    </div>
    <div class="col-md-6">
         <label>Duration_per_week</label> <input class="form-control"value="{{$classroom->duration_per_week}}" name="duration_per_week" type="text">
    </div>
    <div class="col-md-6">
         <label>Requirement</label> <input class="form-control"value="{{$classroom->requirement}}"name="requirement" type="text">
    </div>
    <div class="col-md-6">
         <label>Information</label> <input class="form-control"value="{{$classroom->information}}" name="information" type="text">
    </div>
    <div class="col-md-6">
      <label>Id tutor</label> <input class="form-control"value="{{$classroom->id_tutor}}" name="id_tutor" type="text">
 </div>
</div>




<div class="mb-3">
    <button type="submit" class="btn btn-warning py-2 px-5" >{{ __('Lưu') }}</button>
</div>
</div>  



@endsection
