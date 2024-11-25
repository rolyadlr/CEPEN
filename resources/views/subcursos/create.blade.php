<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg mx-4">
            <form action="{{ route('subcursos.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nombre') @enderror" value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('descripcion') @enderror">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="curso_id" class="block text-sm font-medium text-gray-700">Curso</label>
                    <select id="curso_id" name="curso_id" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('curso_id') @enderror">
                        @foreach ($cursos as $curso)
                            <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>{{ $curso->nombre }}</option>
                        @endforeach
                    </select>
                    @error('curso_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Crear
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
