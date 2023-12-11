@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chung Tâm Gia Sư</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .hero {
            background-image: url('hero-background.jpg');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        .cta-button {
            display: inline-block;
            background-color: #ff9900;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .service-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .service-card img {
            width: 100%;
            border-radius: 8px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    
   

    <section class="services">
        <div class="container">
            <h2>Dịch Vụ Của Chúng Tôi</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="service-card">
                        <img src="https://salt.tikicdn.com/cache/550x550/ts/product/9a/92/75/ba44246ec493892d08c98b048168612d.jpg" alt="Toán" class="img-fluid">
                        <h3>Toán</h3>
                        <p>Chúng tôi có đội ngũ gia sư chất lượng trong mọi lĩnh vực toán học.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <img src="https://metaisach.com/wp-content/uploads/2019/01/sach-giao-khoa-ngu-van-lop-6.jpg" alt="Văn" class="img-fluid">
                        <h3>Văn</h3>
                        <p>Gia sư với kinh nghiệm giảng dạy văn với phương pháp hiệu quả.</p>
                    </div>
                </div>
            </div>
            <!-- Thêm các dịch vụ khác tương tự -->
        </div>
    </section>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

@endsection
