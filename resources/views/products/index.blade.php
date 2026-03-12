<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Lista de Productos') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white border-b border-gray-700">
                    <div class="mb-4">
                        <a
                            href="{{ route('products.create') }}"
                            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                        >
                            Create
                        </a>
                    </div>
                    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">ID</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Modelo</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Proveedor</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Galeria</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Desperdicio</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Costo</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="bg-neutral-primary border-b border-default">
                                        <td class="px-6 py-4">{{ $product->id }}</td>
                                        <td class="px-6 py-4">{{ $product->modelo }}</td>
                                        <td class="px-6 py-4">{{ $product->proveedor }}</td>
                                        <td class="px-6 py-4">{{ $product->galeria }}</td>
                                        <td class="px-6 py-4">{{ $product->desperdicio }}</td>
                                        <td class="px-6 py-4">{{ $product->costo }}</td>

                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <button
                                                    type="button"
                                                    onclick="confirmDelete('{{ $product->id}}')"
                                                    class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                                                >
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
</x-app-layout>

<script>
    function confirmDelete(productId) {
        // Configuramos Alertify para que se vea más limpio
        alertify
            .confirm(
                "Confirmar Eliminación", // Título
                "¿Estás seguro de que deseas eliminar este producto?", // Mensaje
                function () {
                    // SI - El usuario confirmó
                    let form = document.createElement("form");
                    form.method = "POST";
                    form.action = `/products/${productId}`;

                    // Importante: Laravel no entiende @csrf dentro de JS puro si no es un archivo Blade.
                    // Es mejor usar el token directamente del meta tag.
                    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                    form.innerHTML = `
                    <input type="hidden" name="_token" value="${csrfToken}">
                    <input type="hidden" name="_method" value="DELETE">
                `;

                    document.body.appendChild(form);
                    form.submit();
                },
                function () {
                    // NO - El usuario canceló o cerró la ventana
                    // Solo mostramos el error una vez y dejamos que Alertify cierre la caja solo
                    alertify.error("Operación cancelada");
                },
            )
            .set("labels", {
                ok: "Eliminar",
                cancel: "Cancelar",
            }); // Personaliza los textos de los botones
    }
</script>
