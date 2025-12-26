@extends('template.default')

@section('content')
<h1>INFORMATION</h1>

<ul>
    <li>ชื่อ: {{ $data['fname'] }}</li>
    <li>นามสกุล: {{ $data['lname'] }}</li>
    <li>วันเกิด: {{ $data['birthday'] }}</li>
    <li>เพศ: {{ $data['gender'] }}</li>
    <li>ที่อยู่: {{ $data['address'] }}</li>
    <li>
    แนวเพลง:
    @if (is_array($data['music']))
        {{ implode(', ', $data['music']) }}
    @else
        {{ $data['music'] }}
    @endif
</li>
    <li>สีที่ชอบ:
        <span style="
            display:inline-block;
            width:20px;
            height:20px;
            background-color: {{ $data['favcolor'] }};
            border:1px solid #ef6666ff;
            vertical-align:middle;
        "></span>
    </li>
</ul>
@endsection