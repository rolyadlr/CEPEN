<x-app-layout>
    @section('content')
        <div class="container mt-6">
            <p class="h1 text-center mb-4">Programas</p>

            <!-- Tabla de programas -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <a
                                    href="{{ route('programas.index', array_merge(request()->except('sort', 'order'), ['sort' => 'nombre', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                    Nombre
                                </a>
                            </th>
                            <th>Descripción</th>
                            <th>
                                <a
                                    href="{{ route('programas.index', array_merge(request()->except('sort', 'order'), ['sort' => 'duracion', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                    Duración
                                </a>
                            </th>
                            <th>
                                <a
                                    href="{{ route('programas.index', array_merge(request()->except('sort', 'order'), ['sort' => 'cursos_count', 'order' => request('order') === 'asc' ? 'desc' : 'asc'])) }}">
                                    Cursos
                                </a>
                            </th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($programas as $programa)
                            <tr>
                                <td>{{ $programa->nombre }}</td>
                                <td>{{ $programa->descripcion }}</td>
                                <td>{{ $programa->duracion }} meses</td>
                                <td>{{ $programa->cursos_count }}</td>
                                <td>
                                    <a href="{{ $programa->ruta }}" class="btn btn-primary me-2">Ver</a>
                                    <a href="{{ route('programas.edit', $programa) }}" class="btn btn-secondary me-2">Modificar</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No se encontraron programas.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
</x-app-layout>
