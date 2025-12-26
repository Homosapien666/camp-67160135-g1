@extends('template.default')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<div class="form-box">
    <h1>แบบฟอร์มการสมัคร</h1>
    <hr>

    <form action="/submitForm" method="post" onsubmit="return validateForm();">
    @csrf

        <!-- ชื่อ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
            <label for="fname" class="col-form-label">ชื่อ</label>
        </div>
        <div class="col-sm-9">
            <input id="fname" name="fname" type="text" class="form-control">
            <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
        </div>  


        <!-- นามสกุล -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>นามสกุล</label>
            </div>
            <div class="col-sm-9">
                <input id="lname" name="lname" type="text" class="form-control">
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
        </div>

        <!-- วันเกิด -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>วันเกิด</label>
            </div>
            <div class="col-sm-9">
                <input id="birthday" name="birthday" type="date" class="form-control">
                <div class="invalid-feedback">กรุณาเลือกวันเกิด</div>
            </div>
        </div>

        <!-- เพศ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>เพศ</label>
            </div>
            <div class="col-sm-9">
                <input type="radio" name="gender" value="male"> ชาย
                <input type="radio" name="gender" value="female"> หญิง
                <input type="radio" name="gender" value="other"> อื่นๆ
                <div class="text-danger mt-1" id="genderError"></div>
            </div>
        </div>

        <!-- รูป -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>รูป</label>
            </div>
            <div class="col-sm-9">
                <input id="image" type="file" class="form-control">
                <div class="invalid-feedback">กรุณาเลือกรูป</div>
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>ที่อยู่</label>

            </div>
            <div class="col-sm-9">
                <textarea id="address" name="address" class="form-control" rows="3"></textarea>
                <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
            </div>
        </div>

        <!-- สีที่ชอบ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>สีที่ชอบ</label>
            </div>
            <div class="col-sm-9">
                <input id="favcolor" name="favcolor" type="color" class="form-control form-control-color">
                <div class="invalid-feedback">กรุณาเลือกสี</div>
            </div>
        </div>

        <!-- แนวเพลง -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-2">
                <label>แนวเพลงที่ชอบ</label>

            </div>
            <div class="col-sm-9">
                <input type="checkbox" name="music[]" value="Pop"> Pop
                <input type="checkbox" name="music[]" value="Rock"> Rock
                <input type="checkbox" name="music[]" value="Jazz"> Jazz
                <div class="text-danger mt-1" id="musicError"></div>
            </div>
        </div>

        <!-- ยินยอม -->
        <div class="row mb-4 align-items-center">
            <div class="col-sm-2">
                <label>ยินยอม</label>
            </div>
            <div class="col-sm-9">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree"> ยินยอมให้เก็บข้อมูล</label>
                <div class="text-danger mt-1" id="agreeError"></div>
            </div>
        </div>

        <!-- ปุ่ม -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-success px-5">บันทึก</button>
                <button type="reset" class="btn btn-light px-5">รีเซ็ต</button>
            </div>
        </div>

    </form>
</div>
@endsection

@push('scripts')
    <script>

        function clickMe() {

        let fname = document.getElementById('fname');
        let lname = document.getElementById('lname');
        let birthday = document.getElementById('birthday');
        let address = document.getElementById('address');
        let checkbox = document.getElementById('invalidCheck');
        let myfile = document.getElementById('myfile');


        // Name
        if (fname.value === "") {
            fname.classList.add('is-invalid');
            fname.classList.remove('is-valid');
            isValid = false;
        } else {
            fname.classList.add('is-valid');
            fname.classList.remove('is-invalid');
        }

        // Surname
        if (lname.value === "") {
            lname.classList.add('is-invalid');
            lname.classList.remove('is-valid');
            isValid = false;
        } else {
            lname.classList.add('is-valid');
            lname.classList.remove('is-invalid');
        }

        // Birthday
        if (birthday.value === "") {
            birthday.classList.add('is-invalid');
            birthday.classList.remove('is-valid');
            isValid = false;
        } else {
            birthday.classList.add('is-valid');
            birthday.classList.remove('is-invalid');
        }

        // Address
        if (address.value === "") {
            address.classList.add('is-invalid');
            address.classList.remove('is-valid');
            isValid = false;
        } else {
            address.classList.add('is-valid');
            address.classList.remove('is-invalid');
        }

        // Image
        if (myfile.value === "") {
            myfile.classList.add('is-invalid');
            myfile.classList.remove('is-valid');
            isValid = false;
        } else {
            myfile.classList.add('is-valid');
            myfile.classList.remove('is-invalid');
        }

        // checkbox
        if (!checkbox.checked) {
            checkbox.classList.add('is-invalid');
            checkbox.classList.remove('is-valid');
            isValid = false;
        } else {
            checkbox.classList.add('is-valid');
            checkbox.classList.remove('is-invalid');
        }

        // Music
        let music = document.getElementsByName('music');
        let musicError = document.getElementById('musicError');

        let musicChecked = false;

        for (let i = 0; i < music.length; i++) {
            if (music[i].checked) {
                musicChecked = true;
                break;
            }
        }
        if (!musicChecked) {
            musicError.style.display = "block";
            isValid = false;
        } else {
            musicError.style.display = "none";
        }

        // Music
        let gender = document.getElementsByName('gender');
        let GenderError = document.getElementById('GenderError');

        let GenderChecked = false;

        for (let i = 0; i < gender.length; i++) {
            if (gender[i].checked) {
                GenderChecked = true;
                break;
            }
        }
        if (!GenderChecked) {
            GenderError.style.display = "block";
            isValid = false;
        } else {
            GenderError.style.display = "none";
        }

    }

    </script>
@endpush