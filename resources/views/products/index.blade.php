<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Lista de Productos') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white">
                    <div class="mb-6">
                        <a
                            href="{{ route('products.create') }}"
                            class="inline-block text-white bg-brand hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base text-sm px-4 py-2.5 transition-colors"
                        >
                            Crear Producto
                        </a>
                    </div>

                    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead class="bg-neutral-secondary-soft border-b border-default">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">ID</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Modelo</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Proveedor</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Galeria</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Desperdicio</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Costo</th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default">
                                @foreach ($products as $product)
                                    <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                                        <td class="px-6 py-4 font-medium">{{ $product->id }}</td>
                                        <td class="px-6 py-4">{{ $product->modelo }}</td>
                                        <td class="px-6 py-4">{{ $product->proveedor }}</td>
                                        <td class="px-6 py-4">{{ $product->galeria }}</td>
                                        <td class="px-6 py-4 text-center">{{ $product->desperdicio }}</td>
                                        <td class="px-6 py-4 text-center">{{ $product->costo }}</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center items-center gap-2">
                                                <a
                                                    href="{{route('products.edit', $product->id)}}"
                                                    class="text-white bg-brand hover:bg-brand-strong focus:ring-2 focus:ring-brand-medium font-medium rounded-base text-xs px-3 py-1.5 whitespace-nowrap"
                                                >
                                                    Editar
                                                </a>
                                                <button
                                                    type="button"
                                                    onclick="confirmDelete('{{ $product->id}}')"
                                                    class="text-white bg-danger hover:bg-danger-strong focus:ring-2 focus:ring-danger-medium font-medium rounded-base text-xs px-3 py-1.5 whitespace-nowrap"
                                                >
                                                    Eliminar
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(productId) {
        alertify.confirm(
            "¿Estás seguro?",
            "Esta acción eliminará el producto de forma permanente.",
            function () {
                let form = document.createElement("form");
                form.method = "POST";
                // Usamos la ruta de Laravel directamente si prefieres
                form.action = `/products/${productId}`;

                // Aquí es donde entra el @csrf
                // Lo envolvemos en comillas para que Blade lo renderice como HTML
                form.innerHTML = `
                                                        {!! csrf_field() !!}
                                                        @method('DELETE')
                                                    `;

                document.body.appendChild(form);
                form.submit();
            },
            function () {
                alertify.error("Cancelado");
            },
        );
    }
</script>
