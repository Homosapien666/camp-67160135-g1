<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Register Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            height: 100vh;
            color: white;

            background: #4A0E0E;

            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
        }

        .form-box {
            width: 520px;
            padding: 25px;
            background: rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            backdrop-filter: blur(3px);
        }

        h1 {
            color: #FFD369;

            font-weight: 600;
        }

        .floating-gif {
            position: fixed;
            right: 60px;
            top: 50%;
            transform: translateY(-50%);
            width: 420px;
            z-index: 999;
        }
    </style>
</head>

<body>
<div class = 'container mt-4'>

        @yield('content')
</div>

</body>

</html>
