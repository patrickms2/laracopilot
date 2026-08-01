<x-layouts::admin :title="'Productos'">

    <div class='mb-5 grid gap-4 sm:grid-cols-4'>
        @foreach ([['Referencias', count($products)], ['Stock total', '1.364'], ['Pedidos hoy', '27'], ['Recogidas pendientes', '9']] as $s)
            <div class='rounded-2xl border border-zinc-200 bg-white p-4 shadow-sm'>
                <p class='text-xs uppercase tracking-widest text-zinc-400'>{{ $s[0] }}</p>
                <p class='mt-1 text-xl font-semibold text-zinc-900'>{{ $s[1] }}</p>
            </div>
        @endforeach
    </div>

    <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm'>
        <div class='flex flex-wrap items-center gap-3 border-b border-zinc-100 p-4'>
            <div class='min-w-[220px] flex-1'>
                <flux:input icon='magnifying-glass' placeholder='Buscar producto' />
            </div>
            <flux:select class='max-w-44'>
                <option>Todas las categorías</option>
                <option>Vinos</option>
                <option>Aloe Vera</option>
                <option>Vinoterapia</option>
                <option>Argán</option>
                <option>Cochinilla</option>
            </flux:select>
            <flux:button variant='primary' href='/admin/products/create'>Nuevo producto</flux:button>
        </div>

        <div class='overflow-x-auto'>
            <table class='w-full text-left text-sm'>
                <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                    <tr>
                        <th class='px-4 py-3 font-medium'>Producto</th>
                        <th class='px-4 py-3 font-medium'>Categoría</th>
                        <th class='px-4 py-3 font-medium'>Punto de recogida</th>
                        <th class='px-4 py-3 font-medium'>Precio</th>
                        <th class='px-4 py-3 font-medium'>Stock</th>
                        <th class='px-4 py-3 font-medium'>Estado</th>
                        <th class='px-4 py-3'></th>
                    </tr>
                </thead>
                <tbody class='divide-y divide-zinc-100'>
                    @foreach ($products as $p)
                        <tr class='hover:bg-zinc-50/70'>
                            <td class='px-4 py-3'>
                                <div class='flex items-center gap-3'>
                                    <img src='{{ $p['image'] }}' alt='' class='size-10 rounded-lg object-cover'>
                                    <div class='min-w-0'>
                                        <p class='truncate font-medium text-zinc-800'>{{ $p['name'] }}</p>
                                        <p class='truncate text-[11px] text-zinc-400'>{{ $p['note'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class='px-4 py-3'><flux:badge size='sm' color='zinc'>{{ $p['category'] }}</flux:badge></td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-500'>{{ $p['pickup'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $p['price'] }} €</td>
                            <td class='px-4 py-3 text-zinc-600'>{{ $p['stock'] }}</td>
                            <td class='px-4 py-3'>
                                <flux:badge size='sm' :color="$p['stock'] < 50 ? 'amber' : 'lime'">{{ $p['stock'] < 50 ? 'Stock bajo' : 'Disponible' }}</flux:badge>
                            </td>
                            <td class='px-4 py-3 text-right'>
                                <button onclick="alert('Available in Build mode')" class='text-xs text-zinc-500 underline underline-offset-4 hover:text-zinc-800'>Editar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts::admin>
