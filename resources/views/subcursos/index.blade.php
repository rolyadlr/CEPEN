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
                    <a href="{{ route('subcursos.create') }}" class="btn btn-primary">Crear Subcurso</a>
                    <table class="table mt-3">
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
                                <tr>
                                    <td>{{ $subcurso->nombre }}</td>
                                    <td>{{ $subcurso->descripcion }}</td>
                                    <td>{{ $subcurso->curso->nombre }}</td>
                                    <td>
                                        <a href="{{ route('subcursos.show', $subcurso->id) }}" class="btn btn-info">Ver</a>
                                        <a href="{{ route('subcursos.edit', $subcurso->id) }}" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('subcursos.destroy', $subcurso->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
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
