<x-app-layout>
    @section('content')
        <div class="container mt-6">
            <p class="h1 text-center mb-4">Carreras Profesionales</p>

            <!-- Tabla de carreras -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <a
                                    href="{{ route('carreras.index', array_merge(request()->except('sort', 'order'), ['sort' => 'nombre', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                    Nombre
                                </a>
                            </th>
                            <th>
                                <a
                                    href="{{ route('carreras.index', array_merge(request()->except('sort', 'order'), ['sort' => 'descripcion', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                    Descripción
                                </a>
                            </th>
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
                                    <a href="{{ $carrera->ruta }}" class="btn btn-primary me-2">Ver</a>
                                    @auth
                                    @if(auth()->user()->tieneRol(['admin']))
                                    <a href="{{ route('carreras.edit', $carrera) }}" class="btn btn-secondary me-2">Modificar</a>
                                    @endif @endauth
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
        </div>
    @endsection
</x-app-layout>
