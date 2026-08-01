<x-layouts::admin :title="'Agentes MCP'">

    <div class='mb-5 grid gap-4 sm:grid-cols-4'>
        @foreach ([['Agentes', count($agents)], ['Herramientas', '27'], ['Eventos hoy', '1.842'], ['Latencia media', '183 ms']] as $s)
            <div class='rounded-2xl border border-zinc-200 bg-white p-4 shadow-sm'>
                <p class='text-xs uppercase tracking-widest text-zinc-400'>{{ $s[0] }}</p>
                <p class='mt-1 text-xl font-semibold text-zinc-900'>{{ $s[1] }}</p>
            </div>
        @endforeach
    </div>

    <div class='grid gap-4 lg:grid-cols-3'>

        <div class='rounded-2xl border border-zinc-200 bg-white shadow-sm lg:col-span-2'>
            <div class='flex items-center justify-between border-b border-zinc-100 p-4'>
                <flux:heading size='lg'>Servidores conectados</flux:heading>
                <flux:button variant='primary' onclick="alert('Available in Build mode')">Añadir servidor</flux:button>
            </div>

            <div class='overflow-x-auto'>
                <table class='w-full text-left text-sm'>
                    <thead class='border-b border-zinc-100 text-xs uppercase tracking-wider text-zinc-400'>
                        <tr>
                            <th class='px-4 py-3 font-medium'>Agente</th>
                            <th class='px-4 py-3 font-medium'>Servidor MCP</th>
                            <th class='px-4 py-3 font-medium'>Herramientas</th>
                            <th class='px-4 py-3 font-medium'>Latencia</th>
                            <th class='px-4 py-3 font-medium'>Última llamada</th>
                            <th class='px-4 py-3 font-medium'>Estado</th>
                        </tr>
                    </thead>
                    <tbody class='divide-y divide-zinc-100'>
                        @foreach ($agents as $a)
                            <tr class='hover:bg-zinc-50/70'>
                                <td class='whitespace-nowrap px-4 py-3 font-medium text-zinc-800'>{{ $a['name'] }}</td>
                                <td class='whitespace-nowrap px-4 py-3 font-mono text-xs text-zinc-500'>{{ $a['server'] }}</td>
                                <td class='px-4 py-3 text-zinc-600'>{{ $a['tools'] }}</td>
                                <td class='whitespace-nowrap px-4 py-3 text-zinc-600'>{{ $a['latency'] }}</td>
                                <td class='px-4 py-3 text-xs text-zinc-500'>{{ $a['last'] }}</td>
                                <td class='px-4 py-3'>
                                    <flux:badge size='sm' :color="$a['status'] === 'Conectado' ? 'lime' : 'amber'">{{ $a['status'] }}</flux:badge>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class='space-y-4'>
            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <div class='flex items-center gap-2'>
                    <span class='size-2 animate-pulse rounded-full bg-emerald-500'></span>
                    <flux:heading size='lg'>Eventos del orquestador</flux:heading>
                </div>
                <div class='mt-4 space-y-3 font-mono text-[11px] leading-relaxed text-zinc-600'>
                    @foreach ([
                        ['12:04:11', 'intent.detect', 'usuario → "visitar bodega mañana"'],
                        ['12:04:12', 'plan.build', 'taxi → bodega → restaurante → taxi'],
                        ['12:04:13', 'tool.call', 'taxi.reservar_taxi(16:00)'],
                        ['12:04:14', 'tool.call', 'winery.reservar_visita(2 pax)'],
                        ['12:04:15', 'tool.call', 'resto.reservar_mesa(19:00)'],
                        ['12:04:17', 'payment.verified', 'MLP-24815 · 272 €'],
                        ['12:04:18', 'dispatch.sent', '4 proveedores notificados'],
                        ['12:04:22', 'webhook.ack', 'taxi · orden aceptada'],
                    ] as $e)
                        <div class='flex gap-2'>
                            <span class='text-zinc-400'>{{ $e[0] }}</span>
                            <span class='text-[#C1892F]'>{{ $e[1] }}</span>
                            <span class='min-w-0 flex-1 truncate'>{{ $e[2] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <flux:heading size='lg'>Canal en tiempo real</flux:heading>
                <div class='mt-4 space-y-2 text-sm text-zinc-600'>
                    <div class='flex justify-between'><span>Websockets</span><span class='text-emerald-600'>Activo</span></div>
                    <div class='flex justify-between'><span>Canal</span><span class='font-mono text-xs'>orders.dispatch</span></div>
                    <div class='flex justify-between'><span>Suscriptores</span><span>18</span></div>
                    <div class='flex justify-between'><span>Reintentos webhook</span><span class='text-amber-600'>2</span></div>
                </div>
            </div>
        </div>

    </div>

</x-layouts::admin>