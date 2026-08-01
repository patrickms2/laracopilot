<x-layouts::admin :title="'Restaurantes'">

    <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm'>
        <div class='flex flex-wrap items-center gap-3 border-b border-zinc-100 p-4'>
            <div class='min-w-[220px] flex-1'>
                <flux:input icon='magnifying-glass' placeholder='Buscar restaurante o zona' />
            </div>
            <flux:select class='max-w-44'>
                <option>Todas las zonas</option>
                <option>Yaiza</option>
                <option>Puerto del Carmen</option>
                <option>Arrecife</option>
                <option>Haría</option>
            </flux:select>
            <flux:button variant='primary' onclick="alert('Available in Build mode')">Nuevo restaurante</flux:button>
        </div>

        <div class='overflow-x-auto'>
            <table class='w-full text-left text-sm'>
                <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                    <tr>
                        <th class='px-4 py-3 font-medium'>Restaurante</th>
                        <th class='px-4 py-3 font-medium'>Cocina</th>
                        <th class='px-4 py-3 font-medium'>Zona</th>
                        <th class='px-4 py-3 font-medium'>Menú</th>
                        <th class='px-4 py-3 font-medium'>Turnos</th>
                        <th class='px-4 py-3 font-medium'>Valoración</th>
                        <th class='px-4 py-3 font-medium'>Estado</th>
                        <th class='px-4 py-3'></th>
                    </tr>
                </thead>
                <tbody class='divide-y divide-zinc-100'>
                    @foreach ($restaurants as $i => $r)
                        <tr class='hover:bg-zinc-50/70'>
                            <td class='px-4 py-3'>
                                <div class='flex items-center gap-3'>
                                    <img src='{{ $r['image'] }}' alt='' class='size-10 rounded-lg object-cover'>
                                    <div class='min-w-0'>
                                        <p class='truncate font-medium text-zinc-800'>{{ $r['name'] }}</p>
                                        <p class='truncate text-[11px] text-zinc-400'>{{ $r['address'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $r['cuisine'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-500'>{{ $r['zone'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $r['menu'] }} €</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ count($r['slots']) }} turnos</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>★ {{ $r['rating'] }} <span class='text-xs text-zinc-400'>({{ $r['reviews'] }})</span></td>
                            <td class='px-4 py-3'>
                                <flux:badge size='sm' :color="$i % 4 === 3 ? 'amber' : 'lime'">{{ $i % 4 === 3 ? 'Completo hoy' : 'Con mesas' }}</flux:badge>
                            </td>
                            <td class='px-4 py-3 text-right'>
                                <a href='/restaurants/{{ $r['slug'] }}' class='text-xs text-zinc-500 underline underline-offset-4 hover:text-zinc-800'>Ver ficha</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts::admin>
