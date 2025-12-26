@extends('template.default')

@section('content')
<h1>Flight Create</h1>
<h1>Flight Lists</h1>
<Form action="" {{url('/flights')}}method = "POST">
    @csrf
    <label for = "name">Name</label>
    <input class = "form-control" type="text" name >

