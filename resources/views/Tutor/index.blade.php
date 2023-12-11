@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h3>Tutor Manage</h3> 
                </div>
                
                     
       
        <div class="row pb-3">
            <div class="row py-3">
                <div class="col-md-6">
                    <h2><a href="{{route('tutor.create')}}" class="btn btn-success">Add Tutor</a></h3>
                </div>
            </div>
        <form method="get" action="{{ route('tutor.search') }}">
            <?php
            $selectedValue = $_GET['sex'] ?? null;
            ?>
            <label for="sex">Chọn giới tính:</label>
            <select id="sex" name="sex">
                <option value="Nam" <?php echo ($selectedValue == 'Nam') ? 'selected' : ''; ?>>Nam</option>
                <option value="Nữ" <?php echo ($selectedValue == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
                
            </select>
            <?php
            $selectedAge = $_GET['start_age'] ?? null;
            ?>
            <label for="start_age">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Chọn độ tuổi tối thiểu:</label>
            <select id="start_age" name="start_age">
                <?php
                for ($i = 18; $i <= 60; $i++) {
                    echo "<option value=\"$i\"";
                    echo ($selectedAge == $i) ? 'selected' : '';
                    echo ">$i</option>";
                }
                ?>
            </select>
            <?php
            $selectAge = $_GET['end_age'] ?? null;
            ?>
            
            <label for="end_age">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Chọn độ tuổi tối đa:</label>
            <select id="end_age" name="end_age">
                <?php
                for ($i = 18; $i <= 60; $i++) {
                    echo "<option value=\"$i\"";
                    echo ($selectAge == $i) ? 'selected' : '';
                    echo ">$i</option>";
                }
                ?>
            </select>
       
               
            <div class="col-md-3 pt4">            
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
           
        </div>
        </form>
        </div>
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            
                @if(session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
                @endif
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="{{ route('tutor.search') }}">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search Rating, Address, Name" value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
      

         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Address</th>
                <th scope="col">Age</th>
                <th scope="col">Sex</th>
                <th scope="col">Rate</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>

         @foreach ($tutors as $post)
        
              <tr>
                <th scope="row">{{ $post->name }}</th>
                <td>{{ $post->dateofbirth }}</td>
                <td>{{ $post->current_address }}</td>
                <td>{{ $post->age }}</td>
                <td>{{ $post->sex }}</td>
                <td>
                    {{ isset($post->tutorreviewrate->rate) && !empty($post->tutorreviewrate->rate) ? $post->tutorreviewrate->rate : 'Chưa đánh giá' }}
                    
                </td>
                <td>
                    <form action="{{route('tutor.destroy',$post->id)}}" method="POST">
                        <a href="{{route('tutor.edit',$post->id)}}" class="btn btn-info">Sửa</a>
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
   
</body>

@endsection