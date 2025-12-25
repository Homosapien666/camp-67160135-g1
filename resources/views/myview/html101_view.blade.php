@extends('template.default')

@section('content')
<h1>INFORMATION</h1>

<ul>
    <li>ชื่อ: {{ $data['fname'] }}</li>
    <li>นามสกุล: {{ $data['lname'] }}</li>
    <li>วันเกิด: {{ $data['birthday'] }}</li>
    <li>เพศ: {{ $data['gender'] }}</li>
    <li>ที่อยู่: {{ $data['address'] }}</li>

    <li>แนวเพลง:
        {{ isset($data['music']) ? implode(', ', $data['music']) : '-' }}
    </li>

    <li>สีที่ชอบ:
        <span style="
            width:20px;
            height:20px;
            display:inline-block;
            background-color: {{ $data['favcolor'] }};
            border:1px solid #000;
        "></span>
    </li>

    <li>ยินยอม:
        {{ isset($data['agree']) ? 'ยินยอม' : 'ไม่ยินยอม' }}
    </li>
</ul>
@endsection
