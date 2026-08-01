<x-layouts::admin :title="'Dashboard'">

    <div class='grid gap-4 sm:grid-cols-2 xl:grid-cols-4'>
        @foreach ([
            ['Reservas hoy', '38', '+12% vs. ayer', 'clipboard-document-list', 'bg-[#FAF6EF] text-[#C1892F]'],
            ['Ingresos del día', '6.480 €', '+8% vs. ayer', 'banknotes', 'bg-emerald-50 text-emerald-600'],
            ['Taxis en ruta', '4 / 10', 'Tiempo medio 4 min', 'truck', 'bg-sky-50 text-sky-600'],
            ['Pedidos a proveedores', '112', '6 agentes conectados', 'cpu-chip', 'bg-violet-50 text-violet-600'],
        ] as $kpi)
            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <span class='flex size-10 items-center justify-center rounded-xl {{ $kpi[4] }}'>
                    <flux:icon :name="$kpi[3]" class='size-5' />
                </span>
                <p class='mt-4 text-xs uppercase tracking-widest text-zinc-400'>{{ $kpi[0] }}</p>
                <p class='mt-1 text-2xl font-semibold text-zinc-900'>{{ $kpi[1] }}</p>
                <p class='mt-1 text-xs text-zinc-500'>{{ $kpi[2] }}</p>
            </div>
        @endforeach
    </div>

    <div class='mt-6 grid gap-4 lg:grid-cols-3'>

        <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm lg:col-span-2'>
            <div class='flex items-center justify-between'>
                <flux:heading size='lg'>Actividad reciente</flux:heading>
                <a href='/admin/bookings' class='text-xs text-zinc-500 underline underline-offset-4'>Ver reservas</a>
            </div>
            <div class='mt-4 divide-y divide-zinc-100'>
                @foreach ([
                    ['MLP-24815', 'Sofía Marrero pagó Taxi + Bodega + Cena', 'hace 2 min', 'Pagado', 'bg-emerald-50 text-emerald-700'],
                    ['MLP-24816', 'Hans Müller confirmó Plan Full · 4 noches', 'hace 14 min', 'Confirmada', 'bg-emerald-50 text-emerald-700'],
                    ['MLP-24817', 'Tours Marinos aceptó el barco de las 09:00', 'hace 26 min', 'En ruta', 'bg-sky-50 text-sky-700'],
                    ['MLP-24818', 'Taxi asignado a James Whitfield (aeropuerto)', 'hace 41 min', 'Asignada', 'bg-sky-50 text-sky-700'],
                    ['MLP-24819', 'El Cangrejo Rojo revisa mesa para 4', 'hace 1 h', 'Pendiente', 'bg-amber-50 text-amber-700'],
                    ['MLP-24821', 'Finca Los Verdes prepara pedido de aloe', 'hace 1 h', 'Preparando', 'bg-violet-50 text-violet-700'],
                ] as $a)
                    <div class='flex items-center gap-3 py-3'>
                        <span class='w-24 shrink-0 font-mono text-xs text-zinc-400'>{{ $a[0] }}</span>
                        <span class='min-w-0 flex-1 truncate text-sm text-zinc-700'>{{ $a[1] }}</span>
                        <span class='hidden shrink-0 text-xs text-zinc-400 sm:inline'>{{ $a[2] }}</span>
                        <span class='shrink-0 rounded-full px-2.5 py-1 text-[11px] {{ $a[4] }}'>{{ $a[3] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class='space-y-4'>
            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <flux:heading size='lg'>Agentes MCP</flux:heading>
                <div class='mt-4 space-y-3'>
                    @foreach ([
                        ['Taxi Lanzarote Sur', 'Conectado', true],
                        ['Bodegas La Geria', 'Conectado', true],
                        ['Restaurantes Isla', 'Conectado', true],
                        ['Tours Marinos Rubicón', 'Conectado', true],
                        ['Villas Müller', 'Degradado', false],
                        ['Tienda Aloe & Vino', 'Conectado', true],
                    ] as $a)
                        <div class='flex items-center gap-2.5'>
                            <span class='size-2 rounded-full {{ $a[2] ? 'bg-emerald-500' : 'bg-amber-500' }}'></span>
                            <span class='flex-1 text-sm text-zinc-700'>{{ $a[0] }}</span>
                            <span class='text-[11px] text-zinc-400'>{{ $a[1] }}</span>
                        </div>
                    @endforeach
                </div>
                <a href='/admin/agents' class='mt-4 block text-xs text-zinc-500 underline underline-offset-4'>Ver orquestador</a>
            </div>

            <div class='rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm'>
                <flux:heading size='lg'>Planes más vendidos</flux:heading>
                <div class='mt-4 space-y-3'>
                    @foreach ([['Plan Day Winery', 82], ['Plan Day Beach', 64], ['Plan Full Villa', 41], ['Plan Day Boat', 28]] as $p)
                        <div>
                            <div class='flex justify-between text-xs text-zinc-600'><span>{{ $p[0] }}</span><span>{{ $p[1] }}</span></div>
                            <div class='mt-1.5 h-1.5 w-full overflow-hidden rounded-full bg-zinc-100'>
                                <div class='h-full rounded-full bg-[#C1892F]' style='width: {{ $p[1] }}%'></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</x-layouts::admin>
