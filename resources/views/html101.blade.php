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
            text-align: center;
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

    <div class="form-box">

        <h1>แบบฟอร์มการสมัคร</h1>
        <hr>

        <form>

            <!-- Name -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col-sm-9">
                    <input id="fname" name="fname" type="text" class="form-control">
                </div>
            </div>

            <!-- Surname -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="lname">นามสกุล</label>
                </div>
                <div class="col-sm-9">
                    <input id="lname" name="lname" type="text" class="form-control">
                </div>
            </div>

            <!-- Birthday -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="birthday">วันเกิด</label>
                </div>
                <div class="col-sm-9">
                    <input id="birthday" name="birthday" type="date" class="form-control">
                </div>
            </div>

            <!-- Gender -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label>เพศ</label>
                </div>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female">
                        <label class="form-check-label" for="female">อื่นๆ</label>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="image">รูป</label>
                </div>
                <div class="col-sm-9">
                    <input type="file" id="image" name="image" class="form-control">
                </div>
            </div>

            <!-- Address -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="address">ที่อยู่</label>
                </div>
                <div class="col-sm-9">
                    <textarea id="address" name="address" rows="3" class="form-control"></textarea>
                </div>
            </div>

            <!-- Favorite Color -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label for="favcolor">สีที่ชอบ</label>
                </div>
                <div class="col-sm-9">
                    <input type="color" id="favcolor" name="favcolor" class="form-control form-control-color">
                </div>
            </div>

            <!-- Music -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="music1" value="Pop">
                        <label class="form-check-label" for="music1">Pop</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="music2" value="Rock">
                        <label class="form-check-label" for="music2">Rock</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="music3" value="Jazz">
                        <label class="form-check-label" for="music3">Jazz</label>
                    </div>
                </div>
            </div>

            <!-- Consent -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <label>ยินยอม</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-check-input" type="checkbox" id="agree">
                    <label for="agree"> ยินยอมให้เก็บข้อมูล </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row mb-3 align-items-center">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
                <div class="col-sm-9">
                    <button type="reset" class="btn btn-light">รีเซท</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
