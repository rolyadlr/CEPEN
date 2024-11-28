<x-app-layout>
    @section('content')
    <div class="container mt-6">
        <h1>Editar Curso</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('cursos.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="nombre">Nombre del Curso</label>
                <input type="text" name="nombre" class="form-control" value="{{ $curso->nombre }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" class="form-control">{{ $curso->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="duracion">Duración (horas)</label>
                <input type="number" name="duracion" class="form-control" value="{{ $curso->duracion }}">
            </div>
            <div class="form-group">
                <label for="promedio_aprobacion">Promedio de Aprobación (%)</label>
                <input type="number" name="promedio_aprobacion" class="form-control" value="{{ $curso->promedio_aprobacion }}">
            </div>
            <div class="form-group">
                <label for="horario">Horario</label>
                <input type="file" name="horario" class="form-control">
                @if ($curso->documento)
                    <a href="{{ Storage::url($curso->documento) }}" target="_blank">Ver horario actual</a>
                @endif
            </div>
            <div class="form-group">
                <label for="anuncios">Anuncios</label>
                <textarea name="anuncios" class="form-control">{{ $curso->anuncios }}</textarea>
            </div>
            <div class="form-group">
                <label for="programa_id">Programa</label>
                <select name="programa_id" class="form-control">
                    <option value="">Seleccione un programa</option>
                    @foreach($programas as $programa)
                        <option value="{{ $programa->id }}" {{ $curso->programa_id == $programa->id ? 'selected' : '' }}>{{ $programa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="carrera_id">Carrera</label>
                <select name="carrera_id" class="form-control">
                    <option value="">Seleccione una carrera</option>
                    @foreach($carreras as $carrera)
                        <option value="{{ $carrera->id }}" {{ $curso->carrera_id == $carrera->id ? 'selected' : '' }}>{{ $carrera->nombre }}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Actualizar Curso</button>
        </form>
    </div>
    @endsection
    </x-app-layout>
    