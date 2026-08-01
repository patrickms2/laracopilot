<x-layouts::admin :title="'Reservas'">

    <div class='mb-5 grid gap-4 sm:grid-cols-4'>
        @foreach ([['Total', count($bookings)], ['Confirmadas', 5], ['Pendientes', 2], ['Ingresos', '5.026 €']] as $s)
            <div class='rounded-2xl border border-zinc-200 bg-white p-4 shadow-sm'>
                <p class='text-xs uppercase tracking-widest text-zinc-400'>{{ $s[0] }}</p>
                <p class='mt-1 text-xl font-semibold text-zinc-900'>{{ $s[1] }}</p>
            </div>
        @endforeach
    </div>

    <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm'>
        <div class='flex flex-wrap items-center gap-3 border-b border-zinc-100 p-4'>
            <div class='min-w-[220px] flex-1'>
                <flux:input icon='magnifying-glass' placeholder='Buscar por referencia o cliente' />
            </div>
            <flux:select class='max-w-44'>
                <option>Todos los estados</option>
                <option>Confirmada</option>
                <option>Pendiente</option>
                <option>Asignada</option>
                <option>Cancelada</option>
            </flux:select>
            <flux:select class='max-w-44'>
                <option>Todos los tipos</option>
                <option>Taxi</option>
                <option>Tour</option>
                <option>Restaurante</option>
                <option>Plan</option>
            </flux:select>
            <flux:button variant='primary' onclick="alert('Available in Build mode')">Exportar</flux:button>
        </div>

        <div class='overflow-x-auto'>
            <table class='w-full text-left text-sm'>
                <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                    <tr>
                        <th class='px-4 py-3 font-medium'>Referencia</th>
                        <th class='px-4 py-3 font-medium'>Cliente</th>
                        <th class='px-4 py-3 font-medium'>Servicio</th>
                        <th class='px-4 py-3 font-medium'>Proveedor</th>
                        <th class='px-4 py-3 font-medium'>Fecha</th>
                        <th class='px-4 py-3 font-medium'>Pax</th>
                        <th class='px-4 py-3 font-medium'>Total</th>
                        <th class='px-4 py-3 font-medium'>Estado</th>
                        <th class='px-4 py-3 font-medium'>Pago</th>
                        <th class='px-4 py-3'></th>
                    </tr>
                </thead>
                <tbody class='divide-y divide-zinc-100'>
                    @foreach ($bookings as $b)
                        <tr class='hover:bg-zinc-50/70'>
                            <td class='whitespace-nowrap px-4 py-3 font-mono text-xs text-zinc-500'>{{ $b['ref'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $b['client'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $b['type'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-500'>{{ $b['provider'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $b['date'] }}</td>
                            <td class='px-4 py-3 text-zinc-600'>{{ $b['pax'] }}</td>
                            <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $b['total'] }} €</td>
                            <td class='px-4 py-3'>
                                @php($map = ['Confirmada' => 'lime', 'En ruta' => 'sky', 'Asignada' => 'sky', 'Pendiente' => 'amber', 'Preparando' => 'purple', 'Cancelada' => 'red'])
                                <flux:badge size='sm' :color="$map[$b['status']] ?? 'zinc'">{{ $b['status'] }}</flux:badge>
                            </td>
                            <td class='px-4 py-3 text-xs text-zinc-500'>{{ $b['payment'] }}</td>
                            <td class='px-4 py-3 text-right'>
                                <button onclick="alert('Available in Build mode')" class='text-xs text-zinc-500 underline underline-offset-4 hover:text-zinc-800'>Detalle</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class='flex items-center justify-between border-t border-zinc-100 px-4 py-3 text-xs text-zinc-500'>
            <span>Mostrando {{ count($bookings) }} de 248 reservas</span>
            <div class='flex gap-2'>
                <button class='rounded-lg border border-zinc-200 px-3 py-1.5'>Anterior</button>
                <button class='rounded-lg border border-zinc-200 px-3 py-1.5'>Siguiente</button>
            </div>
        </div>
    </div>

</x-layouts::admin>
