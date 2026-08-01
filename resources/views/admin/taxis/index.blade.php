<x-layouts::admin :title="'Taxis'">

    <div class='mb-5 grid gap-4 sm:grid-cols-4'>
        @foreach ([['Flota activa', '10'], ['En ruta', '3'], ['Libres', '4'], ['Trayectos hoy', '40']] as $s)
            <div class='rounded-2xl border border-zinc-200 bg-white p-4 shadow-sm'>
                <p class='text-xs uppercase tracking-widest text-zinc-400'>{{ $s[0] }}</p>
                <p class='mt-1 text-xl font-semibold text-zinc-900'>{{ $s[1] }}</p>
            </div>
        @endforeach
    </div>

    <div class='grid gap-4 lg:grid-cols-3'>

        <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm lg:col-span-2'>
            <div class='flex flex-wrap items-center gap-3 border-b border-zinc-100 p-4'>
                <div class='min-w-[200px] flex-1'>
                    <flux:input icon='magnifying-glass' placeholder='Buscar conductor o matrícula' />
                </div>
                <flux:select class='max-w-40'>
                    <option>Todas las zonas</option>
                    <option>Aeropuerto</option>
                    <option>Puerto del Carmen</option>
                    <option>Playa Blanca</option>
                    <option>Teguise</option>
                </flux:select>
                <flux:button variant='primary' onclick="alert('Available in Build mode')">Asignar trayecto</flux:button>
            </div>

            <div class='overflow-x-auto'>
                <table class='w-full text-left text-sm'>
                    <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                        <tr>
                            <th class='px-4 py-3 font-medium'>Conductor</th>
                            <th class='px-4 py-3 font-medium'>Matrícula</th>
                            <th class='px-4 py-3 font-medium'>Vehículo</th>
                            <th class='px-4 py-3 font-medium'>Zona</th>
                            <th class='px-4 py-3 font-medium'>Trayectos</th>
                            <th class='px-4 py-3 font-medium'>Estado</th>
                        </tr>
                    </thead>
                    <tbody class='divide-y divide-zinc-100'>
                        @foreach ($fleet as $f)
                            <tr class='hover:bg-zinc-50/70'>
                                <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $f['driver'] }}</td>
                                <td class='whitespace-nowrap px-4 py-3 font-mono text-xs text-zinc-500'>{{ $f['plate'] }}</td>
                                <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $f['vehicle'] }}</td>
                                <td class='whitespace-nowrap px-4 py-3 text-zinc-500'>{{ $f['zone'] }}</td>
                                <td class='px-4 py-3 text-zinc-600'>{{ $f['trips'] }}</td>
                                <td class='px-4 py-3'>
                                    @php($c = ['En ruta' => 'sky', 'Libre' => 'lime', 'Asignado' => 'amber', 'Descanso' => 'zinc'])
                                    <flux:badge size='sm' :color="$c[$f['status']] ?? 'zinc'">{{ $f['status'] }}</flux:badge>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class='space-y-4'>
            <div class='overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm'>
                <iframe src='https://maps.google.com/maps?q=Lanzarote&z=10&output=embed' class='h-56 w-full' loading='lazy'></iframe>
                <div class='p-4 text-xs text-zinc-500'>Posiciones actualizadas por websocket cada 5 s.</div>
            </div>

            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <flux:heading size='lg'>Próximos trayectos</flux:heading>
                <div class='mt-4 space-y-3'>
                    @foreach (array_slice($bookings, 0, 5) as $b)
                        <div class='flex items-center gap-3'>
                            <span class='flex size-8 items-center justify-center rounded-lg bg-[#FAF6EF] text-[#C1892F]'>
                                <flux:icon.truck class='size-4' />
                            </span>
                            <div class='min-w-0 flex-1'>
                                <p class='truncate text-sm text-zinc-700'>{{ $b['client'] }}</p>
                                <p class='truncate text-[11px] text-zinc-400'>{{ $b['provider'] }}</p>
                            </div>
                            <span class='shrink-0 text-xs text-zinc-500'>{{ $b['date'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</x-layouts::admin>