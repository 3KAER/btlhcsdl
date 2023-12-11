@extends('layouts.app')

@section('content')

<br> <br> <br> <br> 
<head>
</head>



     <!-- content -->
     <div class="container">
      <form class="card-body" method="post" action="{{route('tutor.store')}}">
      @csrf
      
        <div class="card">
          <h1 class="text-primary p-2 h3" >CREATE TUTOR</h1>
           
      <div class="mb-3 row">
          <div class="col-md-6">
               <label>Name</label> <input class="form-control" name="name" >
          </div>
          <div class="col-md-6">
               <label>Date of birth</label> <input class="form-control" name="dateofbirth" type="text">
          </div>
          <div class="col-md-6">
               <label>Current Address</label> <input class="form-control" name="current_address" type="text">
          </div>
          <div class="col-md-6">
               <label>Age</label> <input class="form-control" name="age" type="text">
          </div>
          <div class="col-md-6">
               <label>Sex	</label> <input class="form-control" name="sex" type="text">
          </div>
               
          <div class="col-md-6">
            <label>Confirm Status</label> <input class="form-control" name="confirm_status" type="text">
          </div>
          
      </div>
      
      
      
      <div class="mb-3">
          <button type="submit" class="btn btn-warning py-2 px-5" >{{ __('Lưu') }}</button>
      </div>
      
        @csrf
      </form> 
      </div> 
      </div> 
 

@endsection