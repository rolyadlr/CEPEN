<x-app-layout>
@section('content')
<div class="container mt-6">
    <h1>Administración de Cursos</h1>
    
    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3 mt-6">Añadir Nuevo Curso</a>

    @if (session('success'))
        <div class="alert alert-success ">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-6">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Horas</th>
                <th>Promedio de Aprobación</th>
                <th>Programa</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->duracion }} horas</td>
                <td>{{ $curso->promedio_aprobacion }}%</td>
                <td>{{ $curso->programa ? $curso->programa->nombre : 'N/A' }}</td>
                <td>{{ $curso->carrera ? $curso->carrera->nombre : 'N/A' }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</x-app-layout>