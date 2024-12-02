<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="container-fluid mt-6">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="alert alert-success mb-4">
                            {{ __("You're logged in!") }}
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">
                                Información del Usuario
                            </h3>
                            <p class="mt-1 max-w-2xl text-lg text-gray-800">
                                <strong>Nombre:</strong> {{ Auth::user()->name }}
                            </p>
                            <p class="mt-1 max-w-2xl text-lg text-gray-800">
                                <strong>Rol:</strong> {{ Auth::user()->rol_id == 1 ? 'Administrador' : (Auth::user()->rol_id == 2 ? 'Docente' : 'Estudiante') }}
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">
                                Resumen de Usuarios
                            </h3>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Total Usuarios</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalUsuarios }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Administradores</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalAdministradores }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Docentes</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalDocentes }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Estudiantes</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalEstudiantes }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">
                                Estadísticas de Cursos, Programas y Carreras
                            </h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Total Cursos</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalCursos }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Total Programas</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalProgramas }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="bg-light p-4 rounded-lg shadow-md text-center">
                                        <h4 class="text-gray-800 text-xl">Total Carreras</h4>
                                        <p class="text-gray-600 text-2xl">{{ $totalCarreras }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">
                                Notificaciones Recientes
                            </h3>
                            <div class="bg-light p-4 rounded-lg shadow-md">
                                @if ($notificaciones->isNotEmpty())
                                    <ul class="list-group">
                                        @foreach ($notificaciones as $notificacion)
                                            <li class="list-group-item">
                                                {{ $notificacion->mensaje }} - <small>{{ $notificacion->created_at->format('d/m/Y H:i') }}</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No hay notificaciones nuevas.</p>
                                @endif
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
