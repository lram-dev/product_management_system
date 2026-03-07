<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white bg-gray-800 border-b border-gray-200 border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('products.create') }}"
                            class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">
                            Create
                        </a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">Modelo</th>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">Proveedor</th>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">Galeria</th>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">Desperdicio</th>
                                <th class="px-4 py-2 text-gray-900 text-dark text-center">Costo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->id }}
                                </td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->modelo }}
                                </td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->proveedor }}
                                </td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->galeria }}
                                </td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->desperdicio }}
                                </td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    {{ $product->costo }}
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
</x-app-layout>