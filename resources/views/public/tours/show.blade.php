<x-site title='{{ $tour['name'] }} · Malpaís'>

    <section class='relative h-[48vh] min-h-[320px] overflow-hidden'>
        <img src='{{ $tour['image'] }}' alt='{{ $tour['name'] }}' class='absolute inset-0 size-full object-cover'>
        <div class='absolute inset-0 bg-gradient-to-t from-[#14110F] via-[#14110F]/45 to-[#14110F]/15'></div>
        <div class='relative mx-auto flex h-full max-w-6xl flex-col justify-end px-4 pb-8 sm:px-6'>
            <a href='/tours' class='mb-4 inline-flex w-fit items-center gap-1.5 rounded-full bg-[#FAF6EF]/15 px-3 py-1.5 text-xs text-[#FAF6EF] backdrop-blur'>
                <flux:icon.arrow-left class='size-3.5' /> Tours
            </a>
            <span class='w-fit rounded-full bg-[#C1892F] px-3 py-1 text-[11px] font-medium text-[#14110F]'>{{ $tour['type'] }}</span>
            <h1 class='display mt-3 max-w-2xl text-4xl leading-tight tracking-tight text-[#FAF6EF] sm:text-5xl'>{{ $tour['name'] }}</h1>
            <div class='mt-3 flex flex-wrap items-center gap-4 text-sm text-[#FAF6EF]/75'>
                <span class='flex items-center gap-1.5'><flux:icon.star variant='solid' class='size-4 text-[#C1892F]' /> {{ $tour['rating'] }} · {{ $tour['reviews'] }} opiniones</span>
                <span class='flex items-center gap-1.5'><flux:icon.map-pin class='size-4' /> {{ $tour['zone'] }}</span>
                <span class='flex items-center gap-1.5'><flux:icon.clock class='size-4' /> {{ $tour['duration'] }}</span>
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid gap-10 lg:grid-cols-[1.6fr_1fr]'>

            <div>
                <p class='text-[15px] leading-relaxed text-[#14110F]/70'>{{ $tour['summary'] }}</p>

                <div class='mt-8'>
                    <h2 class='display text-xl tracking-tight'>Qué incluye</h2>
                    <div class='mt-4 grid gap-2.5 sm:grid-cols-2'>
                        @foreach ($tour['includes'] as $inc)
                            <div class='flex items-start gap-3 rounded-2xl border border-[#14110F]/10 bg-white p-4 shadow-sm'>
                                <flux:icon.check class='mt-0.5 size-4 shrink-0 text-[#C1892F]' />
                                <span class='text-[13px]'>{{ $inc }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class='mt-8'>
                    <h2 class='display text-xl tracking-tight'>Punto de encuentro</h2>
                    <div class='mt-4 overflow-hidden rounded-2xl border border-[#14110F]/10 bg-white shadow-sm'>
                        <iframe src='https://maps.google.com/maps?q={{ urlencode($tour['meeting'].', Lanzarote') }}&z=13&output=embed' class='h-56 w-full' loading='lazy'></iframe>
                        <div class='flex items-center gap-2 border-t border-[#14110F]/8 px-4 py-3 text-[13px]'>
                            <flux:icon.map-pin class='size-4 text-[#C1892F]' /> {{ $tour['meeting'] }}
                            <span class='ml-auto text-xs text-[#14110F]/45'>{{ $tour['provider'] }}</span>
                        </div>
                    </div>
                </div>

                <div class='mt-8 rounded-3xl border border-[#14110F]/10 bg-[#14110F] p-6 text-[#FAF6EF]'>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Propuesta del concierge</p>
                    <p class='display mt-2 text-xl tracking-tight'>Añadimos el taxi y el regreso, ¿te parece?</p>
                    <div class='mt-4 space-y-2'>
                        <label class='flex cursor-pointer items-center gap-3 rounded-2xl border border-white/12 px-4 py-3'>
                            <input type='checkbox' checked class='size-4 rounded border-white/30 bg-transparent text-[#C1892F] focus:ring-[#C1892F]'>
                            <span class='flex-1 text-[13px]'>Taxi de recogida en tu ubicación actual</span>
                            <span class='text-[13px] font-medium'>20 €</span>
                        </label>
                        <label class='flex cursor-pointer items-center gap-3 rounded-2xl border border-white/12 px-4 py-3'>
                            <input type='checkbox' checked class='size-4 rounded border-white/30 bg-transparent text-[#C1892F] focus:ring-[#C1892F]'>
                            <span class='flex-1 text-[13px]'>Taxi de regreso al terminar</span>
                            <span class='text-[13px] font-medium'>20 €</span>
                        </label>
                        <label class='flex cursor-pointer items-center gap-3 rounded-2xl border border-white/12 px-4 py-3'>
                            <input type='checkbox' class='size-4 rounded border-white/30 bg-transparent text-[#C1892F] focus:ring-[#C1892F]'>
                            <span class='flex-1 text-[13px]'>Mesa después en La Cascada · 2 menús</span>
                            <span class='text-[13px] font-medium'>70 €</span>
                        </label>
                    </div>
                </div>

                <div class='mt-8'>
                    <h2 class='display text-xl tracking-tight'>Recoge tus compras aquí mismo</h2>
                    <p class='mt-1 text-[13px] text-[#14110F]/55'>Preparado y empaquetado para el día de tu visita.</p>
                    <div class='no-bar mt-4 flex gap-3 overflow-x-auto pb-2'>
                        @foreach (array_slice($products, 0, 6) as $p)
                            <div class='w-40 shrink-0 rounded-2xl border border-[#14110F]/10 bg-white p-3 shadow-sm'>
                                <img src='{{ $p['image'] }}' alt='{{ $p['name'] }}' class='h-24 w-full rounded-xl object-cover'>
                                <p class='mt-2 truncate text-[13px] font-medium'>{{ $p['name'] }}</p>
                                <p class='text-[11px] text-[#14110F]/50'>{{ $p['pickup'] }}</p>
                                <div class='mt-2 flex items-center justify-between'>
                                    <span class='text-sm'>{{ $p['price'] }} €</span>
                                    <button onclick="alert('Available in Build mode')" class='rounded-full bg-[#14110F] px-3 py-1 text-[11px] text-[#FAF6EF]'>Añadir</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <aside class='lg:sticky lg:top-24 lg:h-fit'>
                <div class='rounded-3xl border border-[#14110F]/10 bg-white p-6 shadow-sm'>
                    <p class='display text-3xl tracking-tight'>{{ $tour['price'] }} €<span class='ml-1 text-sm font-normal text-[#14110F]/50'>/ {{ $tour['unit'] }}</span></p>

                    <p class='mt-5 text-[13px] font-medium'>Fecha</p>
                    <div class='mt-2 flex gap-2'>
                        @foreach (['Hoy', 'Mañana', '21 jun'] as $i => $d)
                            <button class='rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 1 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $d }}</button>
                        @endforeach
                    </div>

                    <p class='mt-5 text-[13px] font-medium'>Hora disponible</p>
                    <div class='mt-2 flex flex-wrap gap-2'>
                        @foreach ($tour['slots'] as $i => $s)
                            <button class='rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $s }}</button>
                        @endforeach
                    </div>

                    <p class='mt-5 text-[13px] font-medium'>Personas</p>
                    <div class='mt-2 flex gap-2'>
                        @foreach ([1,2,3,4,5,6] as $n)
                            <button class='size-9 rounded-full border text-sm transition hover:border-[#C1892F] {{ $n === 2 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $n }}</button>
                        @endforeach
                    </div>

                    <div class='mt-6 space-y-1.5 border-t border-[#14110F]/10 pt-5 text-[13px]'>
                        <div class='flex justify-between'><span class='text-[#14110F]/60'>Actividad · 2 pax</span><span>{{ $tour['price'] * 2 }} €</span></div>
                        <div class='flex justify-between'><span class='text-[#14110F]/60'>Taxi ida y vuelta</span><span>40 €</span></div>
                        <div class='mt-2 flex justify-between border-t border-[#14110F]/10 pt-2 text-base'><span class='font-medium'>Total</span><span class='display'>{{ $tour['price'] * 2 + 40 }} €</span></div>
                    </div>

                    <a href='/checkout' class='mt-5 block rounded-full bg-[#C1892F] px-5 py-3.5 text-center text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Reservar y pagar</a>
                    <a href='/ai' class='mt-2 block rounded-full border border-[#14110F]/15 px-5 py-3 text-center text-sm transition hover:border-[#C1892F]'>Preguntar al concierge</a>
                </div>
            </aside>

        </div>
    </section>

</x-site>
