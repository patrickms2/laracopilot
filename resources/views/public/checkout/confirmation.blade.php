<x-site title='Reserva confirmada · Malpaís'>

    <div class='mx-auto max-w-2xl px-4 py-12 sm:px-6'>

        <div class='rounded-3xl border border-[#14110F]/10 bg-white p-8 text-center shadow-sm'>
            <span class='mx-auto flex size-14 items-center justify-center rounded-full bg-emerald-50 text-emerald-600'>
                <flux:icon.check class='size-7' />
            </span>
            <h1 class='display mt-5 text-3xl tracking-tight'>Pago verificado</h1>
            <p class='mt-2 text-[15px] text-[#14110F]/60'>Referencia <strong>MLP-24815</strong> · 272 € cobrados</p>
            <p class='mt-1 text-[13px] text-[#14110F]/50'>Ya hemos emitido los pedidos a cada proveedor.</p>
        </div>

        <div class='mt-7'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Despacho en vivo</p>
            <div class='mt-3 divide-y divide-[#14110F]/8 rounded-3xl border border-[#14110F]/10 bg-white shadow-sm'>
                @foreach ($agents as $i => $a)
                    <div class='flex items-center gap-3 px-5 py-4'>
                        <span class='size-2 shrink-0 animate-pulse rounded-full {{ $a['status'] === 'Conectado' ? 'bg-emerald-500' : 'bg-amber-500' }}'></span>
                        <div class='min-w-0 flex-1'>
                            <p class='truncate text-[13px] font-medium'>{{ $a['name'] }}</p>
                            <p class='truncate text-[11px] text-[#14110F]/50'>{{ $a['last'] }}</p>
                        </div>
                        <span class='shrink-0 rounded-full px-2.5 py-1 text-[11px] {{ $i < 4 ? 'bg-emerald-50 text-emerald-700' : 'bg-amber-50 text-amber-700' }}'>{{ $i < 4 ? 'Aceptado' : 'Enviado' }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class='mt-7'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Tu día, hora a hora</p>
            <div class='mt-3 space-y-0'>
                @foreach ([
                    ['16:00', 'Taxi en la puerta', 'Juan Melián · Mercedes Clase V · GC-4821-LZ'],
                    ['16:30', 'Visita y cata El Grifo', 'Guía: Marta · grupo de 2 personas'],
                    ['18:45', 'Taxi a La Cascada', 'Tus 3 botellas viajan contigo'],
                    ['19:00', 'Cena en La Cascada', 'Mesa 7 · 2 menús degustación'],
                    ['21:30', 'Regreso a Villa Müller', 'Conductor asignado 30 min antes'],
                ] as $t)
                    <div class='relative flex gap-5 pb-7'>
                        @if (! $loop->last)
                            <span class='absolute left-[13px] top-7 h-full w-px bg-[#14110F]/12'></span>
                        @endif
                        <span class='relative z-10 mt-1 size-7 shrink-0 rounded-full border border-[#C1892F] bg-[#FAF6EF]'></span>
                        <div class='flex-1 rounded-2xl border border-[#14110F]/10 bg-white p-4 shadow-sm'>
                            <p class='text-[11px] uppercase tracking-widest text-[#C1892F]'>{{ $t[0] }}</p>
                            <p class='mt-1 text-sm font-medium'>{{ $t[1] }}</p>
                            <p class='mt-1 text-[13px] text-[#14110F]/55'>{{ $t[2] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class='mt-4 flex flex-col gap-2 sm:flex-row'>
            <a href='/ai' class='flex-1 rounded-full bg-[#14110F] px-5 py-3.5 text-center text-sm font-medium text-[#FAF6EF] transition hover:bg-[#2A231E]'>Planear el día siguiente</a>
            <a href='/shop' class='flex-1 rounded-full border border-[#14110F]/15 px-5 py-3.5 text-center text-sm transition hover:border-[#C1892F]'>Añadir más productos</a>
        </div>

    </div>

</x-site>
