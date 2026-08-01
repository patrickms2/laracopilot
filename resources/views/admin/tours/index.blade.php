<x-layouts::admin :title="'Tours y bodegas'">

    <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm'>
        <div class='flex flex-wrap items-center gap-3 border-b border-zinc-100 p-4'>
            <div class='min-w-[220px] flex-1'>
                <flux:input icon='magnifying-glass' placeholder='Buscar tour, bodega o proveedor' />
            </div>
            <flux:select class='max-w-44'>
                <option>Todas las categorías</option>
                <option>Bodega</option>
                <option>Barco</option>
                <option>Taxi tour</option>
                <option>Senderismo</option>
                <option>Mercadillo</option>
            </flux:select>
            <flux:button variant='primary' onclick="alert('Available in Build mode')">Nuevo tour</flux:button>
        </div>

        <div class='overflow-x-auto'>
            <table class='w-full text-left text-sm'>
                <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                    <tr>
                        <th class='px-4 py-3 font-medium'>Experiencia</th>
                        <th class='px-4 py-3 font-medium'>Categoría</th>
                        <th class='px-4 py-3 font-medium'>Zona</th>
                        <th class='px-4 py-3 font-medium'>Duración</th>
                        <th class='px-4 py-3 font-medium'>Precio</th>
                        <th class='px-4 py-3 font-medium'>Proveedor</th>
                        <th class='px-4 py-3 font-medium'>Valoración</th>
                        <th class='px-4 py-3'></th>
                    </tr>
                </thead>
                <tbody class='divide-y divide-zinc-100'>
                    @foreach ($tours as $t)
                        <tr class='hover:bg-zinc-50/70'>
                            <td class='px-4 py-3'>
                                <div class='flex items-center gap-3'>
                                    <img src='{{ $t['image'] }}' alt='' class='size-10 rounded-lg object-cover'>
                                    <div class='min-w-0'>
                                        <p class='truncate font-medium text-zinc-800'>{{ $t['name'] }}</p>
                                        <p class='truncate text-[11px] text-zinc-400'>{{ $t['meeting'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class='px-4 py-3'><flux:badge size='sm' color='amber'>{{ $t['type'] }}</flux:badge></td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $t['zone'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $t['duration'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $t['price'] }} € / {{ $t['unit'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-500'>{{ $t['provider'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>★ {{ $t['rating'] }} <span class='text-xs text-zinc-400'>({{ $t['reviews'] }})</span></td>
                            <td class='px-4 py-3 text-right'>
                                <a href='/tours/{{ $t['slug'] }}' class='text-xs text-zinc-500 underline underline-offset-4 hover:text-zinc-800'>Ver ficha</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts::admin>
