@extends('template.default')
@section('header' , 'ตารางแม่สูตรคูณ')

@section('content')

    <form actiom = "/calculate" method = "post">
        @csrf
        <?php //echo isset(); ?>
        <input class = "from-control" name = "mynumber" type="number" >
        <br>
        <button class = "btn btn-success">บันทึก</button>
    </form>

@endsection
