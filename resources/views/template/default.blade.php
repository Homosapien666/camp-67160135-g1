<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML Form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

 <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">

    <style>
        body {
            font-size: 28px;
            font-family: "Poppins", sans-serif;
            margin: 0;
            min-height: 100vh;
            background: #4A0E0E;
            color: #ffffffff;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 900px;
        }

        .form-box {
            background: rgba(0, 0, 0, 0.25);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(3px);
        }

        h1 {
            color: #ffffffff;
            font-weight: 600;
        }

        label {
            color: #ffffffff;
        }

        /* input ตัวอักษรสีดำ อ่านง่าย */
        input,
        textarea {
            color: #000;
        }

        /* error */
        .invalid-feedback,
        
    </style>
</head>

<body>
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- สำหรับใส่ script เพิ่มภายหลัง --}}
    @stack('scripts')
</body>
</html>