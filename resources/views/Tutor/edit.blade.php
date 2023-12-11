@extends('layouts.app')

@section('content')

<br> <br> <br> <br> 
<head>
 
</head>

<body class="g-sidenav-show  bg-gray-100">
  
     <!-- content -->
<div class="container">
<form class="card-body" method="post" action="{{route('tutor.update',$tutor->id)}}">
@csrf
@method('PUT')
<div class="card">
<h1 class="text-primary p-2 h3" > CẬP NHẬT THÔNG TIN SINH VIÊN</h1>
<div class="mb-3 row">
    <div class="col-md-6">
         <label>Name</label> <input class="form-control" value="{{$tutor->name}}"name="name" >
    </div>
    <div class="col-md-6">
         <label>Date of birth</label> <input class="form-control"value="{{$tutor->dateofbirth}}" name="dateofbirth" type="text">
    </div>
    <div class="col-md-6">
         <label>Address</label> <input class="form-control"value="{{$tutor->current_address}}" name="current_address" type="text">
    </div>
    <div class="col-md-6">
         <label>Age</label> <input class="form-control"value="{{$tutor->age}}" name="age" type="text">
    </div>
    <div class="col-md-6">
         <label>Sex</label> <input class="form-control"value="{{$tutor->sex}}" name="sex" type="text">
    </div>
    <div class="col-md-6">
         <label>Confirm status</label> <input class="form-control"value="{{$tutor->confirm_status}}"name="confirm_status" type="text">
    </div>
    
</div>




<div class="mb-3">
    <button type="submit" class="btn btn-warning py-2 px-5" >{{ __('Lưu') }}</button>
</div>
</div>  

 <!-- script -->

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

@endsection
