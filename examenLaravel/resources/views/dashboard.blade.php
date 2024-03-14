<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <table class="border-collapse border border-slate-400 w-full divide-y-8">

                        <thead>

                            <th>creador</th>
                            <th>descripcion</th>
                            <th>fecha de inicio</th>
                            <th>detalles</th>

                        </thead>


                        @foreach($proyectos as $proyecto)



                        <tbody>
                            <tr>
                                <td>
                                    <h1>
                                        {{$proyecto->creador}}
                                    </h1>
                                </td>
                                <td>
                                    <p>{{$proyecto->descripcion}}</p>
                                </td>
                                <td>
                                    <p>{{$proyecto->fechaInicio}}</p>
                                </td>
                                <td>
                                    <p>ver detalles</p>
                                </td>
                            </tr>
                        </tbody>


                        @endforeach
                    </table>

                </div>
            </div>
        </div>
</x-app-layout>