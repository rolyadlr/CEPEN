<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subcursos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('subcursos.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Crear Subcurso</a>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Curso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcursos as $subcurso)
                                <tr class="align-middle">
                                    <td>{{ $subcurso->nombre }}</td>
                                    <td>{{ Str::limit($subcurso->descripcion, 50) }}</td>
                                    <td>{{ $subcurso->curso->nombre }}</td>
                                    <td>
                                        <a href="{{ route('subcursos.show', $subcurso->id) }}" class="btn btn-info">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('subcursos.edit', $subcurso->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('subcursos.destroy', $subcurso->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este subcurso?')">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
