@extends('layouts.app')

@section('content')

<br> <br> <br> <br> 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Intern Workapp by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
 
     <!-- content -->
  
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Class Manage</h3> 
                </div>
                <div class="col-md-6">
                    <a href="{{route('classroom.create')}}" class="btn btn-primary float-end"> Creative Class </a>
                </div>
            </div>       
        </div>
        <div class="card-body">
            @if (Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif

            <table class ="table table-bordered">
                <thead>
                    <tr>  
                        <th>id</th>                    
                        <th>subject</th>
                        <th>num_of_class</th>
                        <th>address</th>
                        <th>salary</th>
                        <th>duration_per_week</th>
                        <th>requirement</th>
                        <th>information</th>
                        <th>id_tutor</th>
                        <th>Sửa/xoá</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($classroom as $sv)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sv->subject}}</td>
                        <td>{{$sv->num_of_class}}</td>
                        <td>{{$sv->address}}</td>
                        <td>{{$sv->salary}}</td>
                        <td>{{$sv->duration_per_week}}</td>
                        <td>{{$sv->requirement}}</td>
                        <td>{{$sv->information}}</td>
                        <td>{{$sv->id_tutor}}</td>
                        <td>                               
                            <form action="{{route('classroom.destroy',$sv->id)}}" method="POST">
                            <a href="{{route('classroom.edit',$sv->id)}}" class="btn btn-info">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
  </div>       
    
 

@endsection