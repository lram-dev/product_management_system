<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="p-6">
                        <div class="mb-4">
                            <label for="modelo" class="block text-gray-700 font-bold mb-2">Modelo:</label>
                            <input type="text" name="modelo" id="modelo"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="proveedor" class="block text-gray-700 font-bold mb-2">Proveedor:</label>
                            <input type="text" name="proveedor" id="proveedor"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="galeria" class="block text-gray-700 font-bold mb-2">Galeria:</label>
                            <input type="Text" name="galeria" id="galeria"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="desperdicio" class="block text-gray-700 font-bold mb-2">Desperdicio:</label>
                            <input type="number" name="desperdicio" id="desperdicio" step="0.1"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="costo" class="block text-gray-700 font-bold mb-2">Costo:</label>
                            <input type="number" name="costo" id="costo" step="0.1"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="flex items-center justify-start gap-3"> <button type="submit"
                                class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                Save
                            </button>
                            <a class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                                href="{{route('products.index')}}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>