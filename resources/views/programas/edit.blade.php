<x-app-layout>
    @section('content')
    <div class="container">
        <h1>Editar Programas</h1>
    
        <form method="POST" action="{{ route('programas.update', $programa) }}">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $programa->nombre }}">
            </div>
    
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ $programa->descripcion }}</textarea>
            </div>
    
            <div class="form-group">
                <label for="duracion">Duración</label>
                <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $programa->duracion }}">
            </div>
    
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    @endsection
    </x-app-layout>