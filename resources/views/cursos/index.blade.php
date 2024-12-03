<x-app-layout>
    @section('content')
    <div class="container-fluid mt-6" style="max-width: 90%; margin: auto;">
        <p class="h1 text-center mt-6 mb-6">Administración de Cursos</p>
        @auth
        @if(auth()->user()->tieneRol(['admin']))
        <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3 mt-6">Añadir Nuevo Curso</a>
        @endif @endauth
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table id="tabla-cursos" class="display">
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
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nombre }}</td>
                        <td>{{ $curso->duracion }}</td>
                        <td>{{ $curso->promedio_aprobacion }}%</td>
                        <td>
                            <a href="{{ route('programas.show', ['slug' => $curso->programa->slug]) }}" class="btn btn-primary btn-sm">
                                {{ $curso->programa->nombre }}
                            </a>                              
                        </td>
                        <td>
                            <a href="{{ route('carreras.show', ['slug' => $curso->carrera->slug]) }}" class="btn btn-primary btn-sm">
                                {{ $curso->carrera->nombre }}
                            </a>                                            
                        </td>
                        <td>
                            <a href="{{ route('cursos.edit', ['curso' => $curso->id]) }}" class="btn btn-warning me-2">Editar</a>
                            @auth
                            @if(auth()->user()->tieneRol(['admin']))
                            <form action="{{ route('cursos.destroy', ['curso' => $curso->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            @endif @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#tabla-cursos').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.5/i18n/Spanish.json"
                }
            });
        });
    </script>
    <script>
        $('#buscar-nombre').on('keyup', function () {
            let table = $('#tabla-cursos').DataTable();
            table.column(0).search(this.value).draw();
        });
    </script>
    @endsection
    </x-app-layout>
    