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
        background: radial-gradient(circle at top, #6b1515, #280404ff);
        color: #ffffff;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        max-width: 900px;
    }

    /* ===== กรอบหลัก (ฟอร์ม) ===== */
    .form-box {
        background: linear-gradient(
            145deg,
            rgba(255, 255, 255, 0.08),
            rgba(0, 0, 0, 0.35)
        );
        padding: 35px;
        border-radius: 20px;
        border: 3px solid rgba(255, 200, 200, 0.25);
        box-shadow:
            0 0 0 6px rgba(0, 0, 0, 0.25),
            0 20px 40px rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(6px);
    }

    /* ===== กรอบขาว (หน้าแสดง Pokemon) ===== */
    .detail-box {
        background: #ffffff;
        color: #000000;
        border-radius: 18px;

        /* ขอบเข้ม */
        border: 5px solid #3a0707;

        /* เงา */
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);

        padding: 30px;
        margin-top: 30px;
    }

    h1 {
        color: #ffffff;
        font-weight: 700;
        text-align: center;
        margin-bottom: 25px;
        text-shadow: 0 0 8px rgba(127, 38, 38, 0.5);
    }

    label {
        color: #ffffff;
        font-weight: 500;
    }

    input,
    textarea {
        color: #000;
        border-radius: 10px;
        border: 2px solid #b36a6a;
        padding: 10px 14px;
        font-size: 18px;
    }

    input:focus,
    textarea:focus {
        border-color: #ffaaaa;
        box-shadow: 0 0 10px rgba(255, 150, 150, 0.6);
    }

    button {
        border-radius: 12px;
        font-size: 20px;
        padding: 10px 25px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.4);
    }

    .invalid-feedback {
        font-size: 18px;
        color: #ffb3b3;
    }
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