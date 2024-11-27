<x-app-layout>
    @section('content')
        <div class="container mt-6">
            <p class="h1">Carreras Profesionales</p>
            <!-- Barra de búsqueda -->
            <form method="GET" action="{{ route('carreras.index') }}" class="form-inline mb-4">
                <div class="input-group">
                    <input type="text" class="form-control mt-3" name="search"
                        placeholder="Buscar carrera"aria-label="default input example" value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>

            <!-- Tabla de carreras -->
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <a
                                href="{{ route('carreras.index', array_merge(request()->except('sort', 'order'), ['sort' => 'nombre', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                Nombre
                            </a>
                        </th>
                        <th>Descripción</th>
                        <th>
                            <a
                                href="{{ route('carreras.index', array_merge(request()->except('sort', 'order'), ['sort' => 'duracion', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                Duración
                            </a>
                        </th>
                        <th>
                            <a
                                href="{{ route('carreras.index', array_merge(request()->except('sort', 'order'), ['sort' => 'cursos_count', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                Cursos
                            </a>
                        </th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($carreras as $carrera)
                        <tr>
                            <td>{{ $carrera->nombre }}</td>
                            <td>{{ $carrera->descripcion }}</td>
                            <td>{{ $carrera->duracion }} meses</td>
                            <td>{{ $carrera->cursos_count }}</td>
                            <td>
                                <a href="{{ route('carreras.index', $carrera) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('carreras.edit', $carrera) }}" class="btn btn-secondary">Modificar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No se encontraron carreras.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endsection
</x-app-layout>
