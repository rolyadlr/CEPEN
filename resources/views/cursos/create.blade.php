<x-app-layout>
@section('content')
<div class="container  mt-6">
    <p class="h1 text-center">Crear Nuevo Curso</p>

    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="h4 text-center" for="nombre">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="descripcion">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="duracion">Horas del Curso</label>
            <input type="number" class="form-control" id="duracion" name="duracion" required>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="promedio_aprobacion">Promedio de Aprobación (%)</label>
            <input type="number" class="form-control" id="promedio_aprobacion" name="promedio_aprobacion" max="100" required>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="horario">Archivo de Horario (PDF)</label>
            <input type="file" class="form-control-file" id="horario" name="horario" accept=".pdf">
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="anuncios">Anuncios</label>
            <textarea class="form-control" id="anuncios" name="anuncios"></textarea>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="programa_id">Programa</label>
            <select class="form-control" id="programa_id" name="programa_id">
                <option value="">Seleccionar Programa</option>
                @foreach($programas as $programa)
                    <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="h4 text-center" for="carrera_id">Carrera</label>
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