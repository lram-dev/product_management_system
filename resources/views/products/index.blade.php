<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white border-b border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('products.create') }}"
                            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
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