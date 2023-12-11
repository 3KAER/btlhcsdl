@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
<table class ="table table-bordered">
    <thead>
        <tr>  
                             
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điểm</th>
            <th>Xếp loại</th>
            
        </tr> 
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->grade }}</td>
            <td>{{ $student->getGrade() }}</td>
    
           
            
        </tr> 
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection