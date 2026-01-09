@extends('template.default')

@section('content')


    <h1>Pokedex</h1>

<div class="form-box">

    <table class="pokedex-table">
    </table>
    <form action = "{{ url('/pokedexs') }}"  method = "POST">
        @csrf
        <label for = "name">Name</label>
        <input class = "form-control" type="text" name = "name" id = "name" >
        <label for = "type">Type</label>
        <input class = "form-control" type="text" name = "type" id = "type">
        <label for = "species">Species</label>
        <input class = "form-control" type="text" name = "species" id = "species">
        <label for = "height">Height</label>
        <input class = "form-control" type="number" name = "height" id = "height">
        <label for = "weight">Weight</label>
        <input class = "form-control" type="number" name = "weight" id = "weight">
        <label for = "hp">Health</label>
        <input class = "form-control" type="decimal" name = "hp" id = "hp">
        <label for = "attack">Attack</label>
        <input class = "form-control" type="decimal" name = "attack" id = "attack">
        <label for = "defense">Defense</label>
        <input class = "form-control" type="decimal" name = "defense" id = "defense">
        <label for = "image_url">Image</label>
        <input class = "form-control" type="url" name = "image_url" id = "image_url">

        <button type="submit" class="btn btn-success"> บันทึก </button>
    
    </form>
    </div>
   
    
    

    @include('pokedexs.table')

@endsection