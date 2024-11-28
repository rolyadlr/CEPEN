<x-app-layout>
@section('content')
<div class="container">
    <h1>Crear Nuevo Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>

        <div class="form-group">
            <label for="duracion">Horas del Curso</label>
            <input type="number" class="form-control" id="duracion" name="duracion" required>
        </div>

        <div class="form-group">
            <label for="promedio_aprobacion">Promedio de Aprobación (%)</label>
            <input type="number" class="form-control" id="promedio_aprobacion" name="promedio_aprobacion" max="100" required>
        </div>

        <div class="form-group">
            <label for="horario">Archivo de Horario (PDF)</label>
            <input type="file" class="form-control-file" id="horario" name="horario" accept=".pdf">
        </div>

        <div class="form-group">
            <label for="anuncios">Anuncios</label>
            <textarea class="form-control" id="anuncios" name="anuncios"></textarea>
        </div>

        <div class="form-group">
            <label for="programa_id">Programa</label>
            <select class="form-control" id="programa_id" name="programa_id">
                <option value="">Seleccionar Programa</option>
                @foreach($programas as $programa)
                    <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="carrera_id">Carrera</label>
            <select class="form-control" id="carrera_id" name="carrera_id">
                <option value="">Seleccionar Carrera</option>
                @foreach($carreras as $carrera)
                    <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Curso</button>
    </form>
</div>
@endsection
</x-app-layout>