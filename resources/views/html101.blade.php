@extends('template.default')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<div class="form-box">
    <h1>แบบฟอร์มการสมัคร</h1>
    <hr>

    <form onsubmit="return validateForm();">

        <!-- ชื่อ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>ชื่อ</label>
            </div>
            <div class="col-sm-9">
                <input id="fname" type="text" class="form-control">
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
        </div>

        <!-- นามสกุล -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>นามสกุล</label>
            </div>
            <div class="col-sm-9">
                <input id="lname" type="text" class="form-control">
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
        </div>

        <!-- วันเกิด -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>วันเกิด</label>
            </div>
            <div class="col-sm-9">
                <input id="birthday" type="date" class="form-control">
                <div class="invalid-feedback">กรุณาเลือกวันเกิด</div>
            </div>
        </div>

        <!-- เพศ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
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
            <div class="col-sm-3">
                <label>รูป</label>
            </div>
            <div class="col-sm-9">
                <input id="image" type="file" class="form-control">
                <div class="invalid-feedback">กรุณาเลือกรูป</div>
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>ที่อยู่</label>
            </div>
            <div class="col-sm-9">
                <textarea id="address" class="form-control" rows="3"></textarea>
                <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
            </div>
        </div>

        <!-- สีที่ชอบ -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>สีที่ชอบ</label>
            </div>
            <div class="col-sm-9">
                <input id="favcolor" type="color" class="form-control form-control-color">
                <div class="invalid-feedback">กรุณาเลือกสี</div>
            </div>
        </div>

        <!-- แนวเพลง -->
        <div class="row mb-3 align-items-center">
            <div class="col-sm-3">
                <label>แนวเพลงที่ชอบ</label>
            </div>
            <div class="col-sm-9">
                <input type="checkbox" id="music1"> Pop
                <input type="checkbox" id="music2"> Rock
                <input type="checkbox" id="music3"> Jazz
                <div class="text-danger mt-1" id="musicError"></div>
            </div>
        </div>

        <!-- ยินยอม -->
        <div class="row mb-4 align-items-center">
            <div class="col-sm-3">
                <label>ยินยอม</label>
            </div>
            <div class="col-sm-9">
                <input type="checkbox" id="agree">
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

<script>
function validateForm() {
    let valid = true;

    /* ===== input ทั่วไป ===== */
    function checkInput(id) {
        const el = document.getElementById(id);

        const oldValid = el.parentElement.querySelector(".valid-feedback");
        if (oldValid) oldValid.remove();

        if (el.value.trim() === "") {
            el.classList.add("is-invalid");
            el.classList.remove("is-valid");
            valid = false;
        } else {
            el.classList.remove("is-invalid");
            el.classList.add("is-valid");

            const div = document.createElement("div");
            div.className = "valid-feedback";
            div.innerText = "ถูกต้อง";
            el.parentElement.appendChild(div);
        }
    }

    checkInput("fname");
    checkInput("lname");
    checkInput("birthday");
    checkInput("address");

    /* ===== เพศ ===== */
    const genderError = document.getElementById("genderError");
    const genderParent = genderError.parentElement;

    let oldGenderValid = genderParent.querySelector(".valid-feedback");
    if (oldGenderValid) oldGenderValid.remove();

    let genderChecked = false;
    document.getElementsByName("gender").forEach(g => {
        if (g.checked) genderChecked = true;
    });

    if (!genderChecked) {
        genderError.innerText = "กรุณาเลือกเพศ";
        genderError.style.color = "red";
        valid = false;
    } else {
        genderError.innerText = "";

        const div = document.createElement("div");
        div.className = "valid-feedback d-block";
        div.innerText = "ถูกต้อง";
        genderParent.appendChild(div);
    }

    /* ===== แนวเพลง ===== */
    const musicError = document.getElementById("musicError");
    const musicParent = musicError.parentElement;

    let oldMusicValid = musicParent.querySelector(".valid-feedback");
    if (oldMusicValid) oldMusicValid.remove();

    const musicChecked =
        music1.checked || music2.checked || music3.checked;

    if (!musicChecked) {
        musicError.innerText = "กรุณาเลือกแนวเพลง";
        musicError.style.color = "red";
        valid = false;
    } else {
        musicError.innerText = "";

        const div = document.createElement("div");
        div.className = "valid-feedback d-block";
        div.innerText = "ถูกต้อง";
        musicParent.appendChild(div);
    }

    /* ===== ยินยอมให้เก็บข้อมูล ===== */
    const agree = document.getElementById("agree");
    const agreeError = document.getElementById("agreeError");
    const agreeParent = agreeError.parentElement;

    let oldAgreeValid = agreeParent.querySelector(".valid-feedback");
    if (oldAgreeValid) oldAgreeValid.remove();

    if (!agree.checked) {
        agreeError.innerText = "กรุณายินยอมให้เก็บข้อมูล";
        agreeError.style.color = "red";
        valid = false;
    } else {
        agreeError.innerText = "";

        const div = document.createElement("div");
        div.className = "valid-feedback d-block";
        div.innerText = "ถูกต้อง";
        agreeParent.appendChild(div);
    }

    return valid;
}
</script>