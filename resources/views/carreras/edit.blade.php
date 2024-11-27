<x-app-layout>
@section('content')
<div class="container">
    <h1>Editar Carrera</h1>

    <form method="POST" action="{{ route('carreras.update', $carrera) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $carrera->nombre }}">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $carrera->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="duracion">Duración</label>
            <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $carrera->duracion }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
</x-app-layout>