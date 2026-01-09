@extends('template.default')

@section('content')

<h1 class="mb-4">{{ $pokedex->name }}</h1>
<div class="form-box">
<div class="card">
    <div class="row">
        <div class="col">
            <img src="{{ $pokedex->image_url }}"
                 class="img-fluid rounded"
                 style="max-height:500px;">
        </div>

        <div class="col">
            <div class="card-body">
                <p><strong>Type:</strong> {{ $pokedex->type }}</p>
                <p><strong>Species:</strong> {{ $pokedex->species }}</p>
                <p><strong>Height:</strong> {{ $pokedex->height }}</p>
                <p><strong>Weight:</strong> {{ $pokedex->weight }}</p>
                <p><strong>HP:</strong> {{ $pokedex->hp }}</p>
                <p><strong>Attack:</strong> {{ $pokedex->attack }}</p>
                <p><strong>Defense:</strong> {{ $pokedex->defense }}</p>

                <a href="{{ url('/pokedexs') }}" class="btn btn-danger mt-3">
                    ย้อนกลับ
                </a>
            </div>
        </div>
    </div>
</div>
</div>

    
    {{-- ฟอร์ม Edit Pokedex --}}
@endsection