<x-site title='Taxi · Malpaís'>

    <section class='mx-auto max-w-3xl px-4 py-10 sm:px-6'>
        <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Taxi</p>
        <h1 class='display mt-2 text-3xl leading-tight tracking-tight sm:text-4xl'>Un coche en 4 minutos.</h1>
        <p class='mt-3 text-[15px] text-[#14110F]/60'>Tu ubicación ya está detectada. Solo confirma el destino.</p>

        <div class='mt-7 overflow-hidden rounded-3xl border border-[#14110F]/10 bg-white shadow-sm'>
            <iframe src='https://maps.google.com/maps?q=Puerto+del+Carmen,+Lanzarote&z=13&output=embed' class='h-64 w-full' loading='lazy'></iframe>

            <div class='space-y-4 p-5'>
                <div class='flex items-start gap-3 rounded-2xl border border-[#14110F]/10 bg-[#FAF6EF] p-4'>
                    <span class='mt-1 size-2.5 rounded-full bg-emerald-500'></span>
                    <div class='flex-1'>
                        <p class='text-[11px] uppercase tracking-widest text-[#14110F]/45'>Recogida</p>
                        <p class='text-sm font-medium'>Villa Müller · Puerto del Carmen</p>
                    </div>
                    <button class='text-xs text-[#C1892F] underline underline-offset-4'>Cambiar</button>
                </div>

                <div>
                    <p class='text-[13px] font-medium'>Destino</p>
                    <div class='mt-2 grid gap-2'>
                        @foreach ([
                            ['Aeropuerto de Lanzarote (ACE)', '18 min · 45 €', false],
                            ['Bodega El Grifo · La Geria', '22 min · 20 €', true],
                            ['Restaurante La Cascada · Yaiza', '14 min · 20 €', false],
                            ['Marina Rubicón · Playa Blanca', '26 min · 32 €', false],
                            ['Playa de Papagayo', '31 min · 38 €', false],
                        ] as $d)
                            <button data-choice data-group='dest' class='flex items-center justify-between rounded-2xl border px-4 py-3 text-left transition hover:border-[#C1892F] {{ $d[2] ? 'border-[#C1892F] bg-white shadow-sm' : 'border-[#14110F]/12' }}'>
                                <span>
                                    <span class='block text-sm'>{{ $d[0] }}</span>
                                    <span class='block text-xs text-[#14110F]/50'>{{ $d[1] }}</span>
                                </span>
                                <flux:icon.chevron-right class='size-4 text-[#14110F]/30' />
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class='grid gap-4 sm:grid-cols-2'>
                    <div>
                        <p class='text-[13px] font-medium'>Pasajeros</p>
                        <div class='mt-2 flex gap-2'>
                            @foreach ([1,2,3,4,6,8] as $n)
                                <button data-choice data-group='pax' class='size-9 rounded-full border text-sm transition hover:border-[#C1892F] {{ $n === 2 ? 'border-[#C1892F] bg-white shadow-sm' : 'border-[#14110F]/12' }}'>{{ $n }}</button>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p class='text-[13px] font-medium'>Cuándo</p>
                        <div class='mt-2 flex gap-2'>
                            @foreach (['Ahora', 'En 30 min', 'Programar'] as $i => $w)
                                <button data-choice data-group='when' class='rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#C1892F] bg-white shadow-sm' : 'border-[#14110F]/12' }}'>{{ $w }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class='rounded-2xl border border-[#14110F]/10 bg-[#14110F] p-4 text-[#FAF6EF]'>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>El concierge sugiere</p>
                    <label class='mt-3 flex cursor-pointer items-center gap-3 rounded-xl border border-white/12 px-4 py-3'>
                        <input type='checkbox' checked class='size-4 rounded border-white/30 bg-transparent text-[#C1892F] focus:ring-[#C1892F]'>
                        <span class='flex-1 text-[13px]'>Programar el regreso a tu ubicación (2 h después)</span>
                        <span class='text-[13px] font-medium'>20 €</span>
                    </label>
                    <label class='mt-2 flex cursor-pointer items-center gap-3 rounded-xl border border-white/12 px-4 py-3'>
                        <input type='checkbox' class='size-4 rounded border-white/30 bg-transparent text-[#C1892F] focus:ring-[#C1892F]'>
                        <span class='flex-1 text-[13px]'>Añadir visita con cata en la bodega de destino</span>
                        <span class='text-[13px] font-medium'>100 €</span>
                    </label>
                </div>

                <div class='flex items-center justify-between rounded-2xl bg-[#FAF6EF] px-4 py-3'>
                    <span class='text-xs uppercase tracking-widest text-[#14110F]/45'>Total estimado</span>
                    <span class='display text-xl'>40 €</span>
                </div>

                <a href='/checkout' class='block rounded-full bg-[#C1892F] px-5 py-3.5 text-center text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Pedir taxi y pagar</a>
            </div>
        </div>

        <div class='mt-8'>
            <h2 class='display text-xl tracking-tight'>Taxi tour · precio cerrado</h2>
            <div class='mt-4 grid gap-3 sm:grid-cols-2'>
                @foreach (array_slice($tours, 2, 2) as $t)
                    <a href='/tours/{{ $t['slug'] }}' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/10 bg-white p-3 shadow-sm transition hover:border-[#C1892F]'>
                        <img src='{{ $t['image'] }}' alt='' class='size-16 rounded-xl object-cover'>
                        <span class='min-w-0 flex-1'>
                            <span class='block truncate text-sm font-medium'>{{ $t['name'] }}</span>
                            <span class='block text-xs text-[#14110F]/55'>{{ $t['duration'] }} · {{ $t['price'] }} €/{{ $t['unit'] }}</span>
                        </span>
                        <flux:icon.chevron-right class='size-4 text-[#14110F]/30' />
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('[data-choice]').forEach(function (b) {
            b.addEventListener('click', function () {
                document.querySelectorAll('[data-group=' + b.dataset.group + ']').forEach(function (x) {
                    x.classList.remove('border-[#C1892F]', 'bg-white', 'shadow-sm');
                    x.classList.add('border-[#14110F]/12');
                });
                b.classList.remove('border-[#14110F]/12');
                b.classList.add('border-[#C1892F]', 'bg-white', 'shadow-sm');
            });
        });
    </script>

</x-site>
