<x-site title='{{ $plan['name'] }} · Malpaís' active='plans'>

    <section class='relative h-[46vh] min-h-[300px] overflow-hidden'>
        <img src='{{ $plan['image'] }}' alt='{{ $plan['name'] }}' class='absolute inset-0 size-full object-cover'>
        <div class='absolute inset-0 bg-gradient-to-t from-[#14110F] via-[#14110F]/50 to-[#14110F]/20'></div>
        <div class='relative mx-auto flex h-full max-w-6xl flex-col justify-end px-4 pb-8 sm:px-6'>
            <a href='/plans' class='mb-4 inline-flex w-fit items-center gap-1.5 rounded-full bg-[#FAF6EF]/15 px-3 py-1.5 text-xs text-[#FAF6EF] backdrop-blur'>
                <flux:icon.arrow-left class='size-3.5' /> Todos los planes
            </a>
            <h1 class='display text-4xl leading-tight tracking-tight text-[#FAF6EF] sm:text-5xl'>{{ $plan['name'] }}</h1>
            <p class='mt-2 max-w-lg text-sm text-[#FAF6EF]/70'>{{ $plan['tagline'] }}</p>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid gap-10 lg:grid-cols-[1.6fr_1fr]'>

            <div>
                <h2 class='display text-2xl tracking-tight'>Itinerario</h2>
                <div class='mt-6 space-y-0'>
                    @foreach ($plan['timeline'] as $i => $t)
                        <div class='relative flex gap-5 pb-8'>
                            @if (! $loop->last)
                                <span class='absolute left-[13px] top-7 h-full w-px bg-[#14110F]/12'></span>
                            @endif
                            <span class='relative z-10 mt-1 flex size-7 shrink-0 items-center justify-center rounded-full border border-[#C1892F] bg-[#FAF6EF] text-[11px] text-[#C1892F]'>{{ $i + 1 }}</span>
                            <div class='flex-1 rounded-2xl border border-[#14110F]/10 bg-white p-4 shadow-sm'>
                                <p class='text-[11px] uppercase tracking-widest text-[#C1892F]'>{{ $t['time'] }}</p>
                                <p class='mt-1 text-sm font-medium'>{{ $t['title'] }}</p>
                                <p class='mt-1 text-[13px] leading-relaxed text-[#14110F]/55'>{{ $t['detail'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class='mt-2 rounded-2xl border border-[#14110F]/10 bg-white p-5 shadow-sm'>
                    <p class='text-sm font-medium'>Añade productos para recoger durante el plan</p>
                    <p class='mt-1 text-[13px] text-[#14110F]/55'>Los dejamos preparados en la bodega, finca o restaurante que visitas ese día.</p>
                    <div class='mt-4 flex flex-wrap gap-2'>
                        <label class='flex cursor-pointer items-center gap-2 rounded-full border border-[#14110F]/12 px-4 py-2 text-xs transition hover:border-[#C1892F]'><input type='checkbox' class='size-3.5 rounded text-[#C1892F] focus:ring-[#C1892F]'> Caja 3 Malvasías · 42 €</label>
                        <label class='flex cursor-pointer items-center gap-2 rounded-full border border-[#14110F]/12 px-4 py-2 text-xs transition hover:border-[#C1892F]'><input type='checkbox' class='size-3.5 rounded text-[#C1892F] focus:ring-[#C1892F]'> Gel puro de aloe · 12 €</label>
                        <label class='flex cursor-pointer items-center gap-2 rounded-full border border-[#14110F]/12 px-4 py-2 text-xs transition hover:border-[#C1892F]'><input type='checkbox' class='size-3.5 rounded text-[#C1892F] focus:ring-[#C1892F]'> Cesta Isla · 55 €</label>
                    </div>
                </div>
            </div>

            <aside class='lg:sticky lg:top-24 lg:h-fit'>
                <div class='rounded-3xl border border-[#14110F]/10 bg-white p-6 shadow-sm'>
                    <p class='text-[11px] uppercase tracking-widest text-[#14110F]/45'>Precio total</p>
                    <p class='display mt-1 text-4xl tracking-tight'>{{ number_format($plan['price'], 0, ',', '.') }} €</p>
                    <p class='mt-1 text-[13px] text-[#14110F]/55'>Para {{ $plan['pax'] }} personas · impuestos incluidos</p>

                    <div class='mt-5 space-y-2 border-t border-[#14110F]/10 pt-5 text-[13px]'>
                        @foreach ($plan['breakdown'] as $b)
                            <div class='flex justify-between gap-4'>
                                <span class='text-[#14110F]/60'>{{ $b[0] }}</span>
                                <span class='shrink-0 font-medium'>{{ $b[1] }} €</span>
                            </div>
                        @endforeach
                    </div>

                    <div class='mt-5 space-y-2'>
                        <p class='text-[13px] font-medium'>Personas</p>
                        <div class='flex gap-2'>
                            @foreach ([2,3,4,5,6] as $n)
                                <button class='size-9 rounded-full border text-sm transition hover:border-[#C1892F] {{ $n === 2 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $n }}</button>
                            @endforeach
                        </div>
                    </div>

                    <a href='/checkout' class='mt-6 block rounded-full bg-[#C1892F] px-5 py-3.5 text-center text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Reservar y pagar</a>
                    <a href='/ai' class='mt-2 block rounded-full border border-[#14110F]/15 px-5 py-3 text-center text-sm transition hover:border-[#C1892F]'>Ajustar con el concierge</a>
                    <p class='mt-4 flex items-center gap-2 text-[11px] text-[#14110F]/45'><flux:icon.shield-check class='size-4' /> Cancelación gratuita hasta 48 h antes</p>
                </div>
            </aside>

        </div>
    </section>

</x-site>
