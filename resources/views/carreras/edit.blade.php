<x-app-layout>
@section('content')
<div class="container mt-6">
    <p class="h1">Editar Carrera</p>

    <form method="POST" action="{{ route('carreras.update', $carrera) }}">
        @csrf
        @method('PUT')

        <div class="form-group mt-6">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $carrera->descripcion }}</textarea>
        </div>

        <div class="form-group mt-6">
            <label for="duracion">Duración</label>
            <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $carrera->duracion }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
</x-app-layout>