<x-site title='Malpaís · Island Concierge' active='home'>

    <section class='relative'>
        <div class='relative min-h-[86vh] overflow-hidden'>
            <img src='https://images.unsplash.com/photo-1506377247377-2a5b3b417ebb?auto=format&fit=crop&w=2000&q=75' alt='Viñedos volcánicos de La Geria' class='absolute inset-0 size-full object-cover'>
            <div class='absolute inset-0 bg-gradient-to-b from-[#14110F]/70 via-[#14110F]/45 to-[#14110F]/85'></div>

            <div class='relative mx-auto flex min-h-[86vh] max-w-6xl flex-col justify-end px-4 pb-10 pt-16 sm:px-6'>
                <p class='text-[11px] uppercase tracking-[0.28em] text-[#E8C98B]'>Lanzarote · concierge integrado</p>
                <h1 class='display mt-4 max-w-2xl text-[2.7rem] leading-[1.05] tracking-tight text-[#FAF6EF] sm:text-6xl'>La isla, resuelta<br>antes de que la pidas.</h1>
                <p class='mt-5 max-w-lg text-base leading-relaxed text-[#FAF6EF]/75'>Dinos qué te apetece. Nosotros encadenamos el taxi que te recoge, la bodega que te espera, la mesa reservada, el regreso a casa y la caja de vino ya preparada.</p>

                <div class='mt-8 rounded-3xl border border-white/15 bg-[#FAF6EF]/95 p-3 shadow-2xl shadow-black/30 backdrop-blur sm:p-4'>
                    <div class='grid gap-2 sm:grid-cols-2'>
                        <a href='/ai' class='group flex items-center justify-between gap-3 rounded-2xl bg-[#14110F] px-5 py-4 text-[#FAF6EF] transition hover:bg-[#2A231E]'>
                            <span>
                                <span class='flex items-center gap-2 text-sm font-medium'><span class='size-1.5 animate-pulse rounded-full bg-[#C1892F]'></span> Modo IA</span>
                                <span class='mt-1 block text-xs text-[#FAF6EF]/60'>Escribe una frase, elige un número</span>
                            </span>
                            <flux:icon.arrow-right class='size-5 transition group-hover:translate-x-1' />
                        </a>
                        <a href='/wizard' class='group flex items-center justify-between gap-3 rounded-2xl border border-[#14110F]/15 px-5 py-4 transition hover:border-[#C1892F] hover:bg-white'>
                            <span>
                                <span class='text-sm font-medium'>Reserva guiada</span>
                                <span class='mt-1 block text-xs text-[#14110F]/55'>Menús simples, todo preseleccionado</span>
                            </span>
                            <flux:icon.arrow-right class='size-5 transition group-hover:translate-x-1' />
                        </a>
                    </div>
                    <div class='no-bar mt-3 flex gap-2 overflow-x-auto pb-1'>
                        <a href='/taxi' class='shrink-0 rounded-full border border-[#14110F]/12 px-4 py-1.5 text-xs text-[#14110F]/70 transition hover:border-[#C1892F]'>Taxi ahora</a>
                        <a href='/tours' class='shrink-0 rounded-full border border-[#14110F]/12 px-4 py-1.5 text-xs text-[#14110F]/70 transition hover:border-[#C1892F]'>Visita a bodega</a>
                        <a href='/restaurants' class='shrink-0 rounded-full border border-[#14110F]/12 px-4 py-1.5 text-xs text-[#14110F]/70 transition hover:border-[#C1892F]'>Cena esta noche</a>
                        <a href='/plans' class='shrink-0 rounded-full border border-[#14110F]/12 px-4 py-1.5 text-xs text-[#14110F]/70 transition hover:border-[#C1892F]'>Plan Day</a>
                        <a href='/shop' class='shrink-0 rounded-full border border-[#14110F]/12 px-4 py-1.5 text-xs text-[#14110F]/70 transition hover:border-[#C1892F]'>Vino y aloe</a>
                    </div>
                </div>
            </div>
        </div>

        <div class='border-b border-[#14110F]/10 bg-[#14110F] text-[#FAF6EF]'>
            <div class='mx-auto grid max-w-6xl grid-cols-2 divide-x divide-white/10 px-4 sm:grid-cols-4 sm:px-6'>
                <div class='px-3 py-5'><p class='display text-2xl'>6</p><p class='text-[11px] uppercase tracking-widest text-[#FAF6EF]/50'>Agentes conectados</p></div>
                <div class='px-3 py-5'><p class='display text-2xl'>4 min</p><p class='text-[11px] uppercase tracking-widest text-[#FAF6EF]/50'>Taxi medio</p></div>
                <div class='px-3 py-5'><p class='display text-2xl'>1 pago</p><p class='text-[11px] uppercase tracking-widest text-[#FAF6EF]/50'>Toda la cadena</p></div>
                <div class='px-3 py-5'><p class='display text-2xl'>24/7</p><p class='text-[11px] uppercase tracking-widest text-[#FAF6EF]/50'>Concierge</p></div>
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-24'>
        <div class='max-w-xl'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Encadenado proactivo</p>
            <h2 class='display mt-3 text-3xl leading-tight tracking-tight sm:text-4xl'>Una petición dispara toda la cadena.</h2>
            <p class='mt-4 text-[15px] leading-relaxed text-[#14110F]/65'>Reservas una bodega y la app propone el taxi de recogida en tu ubicación, el regreso al terminar, la mesa para después y la caja de vino lista para recoger. Tú solo aceptas lo que ya viene marcado.</p>
        </div>

        <div class='mt-10 grid gap-3 sm:grid-cols-2 lg:grid-cols-5'>
            @foreach ([
                ['1', 'Te localizamos', 'Google Maps detecta tu villa u hotel. Sin escribir direcciones.', 'map-pin'],
                ['2', 'Taxi de recogida', 'Propuesto y preseleccionado con hora calculada hacia atrás.', 'truck'],
                ['3', 'Visita o mesa', 'Bodega, tour o restaurante confirmado con el proveedor.', 'sparkles'],
                ['4', 'Regreso a casa', 'Al terminar, vuelta a tu ubicación actual. Ya marcado.', 'arrow-uturn-left'],
                ['5', 'Productos listos', 'Vino, aloe o argán preparados para recoger allí mismo.', 'shopping-bag'],
            ] as $s)
                <div class='rounded-2xl border border-[#14110F]/10 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-[#C1892F]/40 hover:shadow-md'>
                    <div class='flex items-center justify-between'>
                        <span class='flex size-9 items-center justify-center rounded-xl bg-[#14110F] text-[#FAF6EF]'>
                            <flux:icon :name="$s[3]" class='size-4' />
                        </span>
                        <span class='display text-xl text-[#C1892F]'>{{ $s[0] }}</span>
                    </div>
                    <p class='mt-4 text-sm font-medium'>{{ $s[1] }}</p>
                    <p class='mt-1.5 text-[13px] leading-relaxed text-[#14110F]/55'>{{ $s[2] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class='bg-white py-16 sm:py-24'>
        <div class='mx-auto max-w-6xl px-4 sm:px-6'>
            <div class='flex flex-wrap items-end justify-between gap-4'>
                <div>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Plan Day</p>
                    <h2 class='display mt-3 text-3xl tracking-tight sm:text-4xl'>Un día cerrado, un precio.</h2>
                </div>
                <a href='/plans' class='text-sm underline underline-offset-4 hover:text-[#C1892F]'>Ver los seis planes</a>
            </div>

            <div class='no-bar mt-8 flex snap-x gap-4 overflow-x-auto pb-3'>
                @foreach ([
                    ['plan-day-welcome', 'Welcome', 350, 'Taxi aeropuerto · playa · cena', 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=70'],
                    ['plan-day-winery', 'Winery', 450, 'La Geria · cata · La Cascada', 'https://images.unsplash.com/photo-1506377247377-2a5b3b417ebb?auto=format&fit=crop&w=800&q=70'],
                    ['plan-day-beach', 'Beach', 450, 'Cinco calas · kayak · marisco', 'https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=800&q=70'],
                    ['plan-day-boat', 'Boat', 750, 'Barco privado · cena de autor', 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=800&q=70'],
                    ['plan-day-market', 'Market', 750, 'Teguise · taller · crédito', 'https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=800&q=70'],
                    ['plan-day-airport', 'Airport', 350, 'Ruta · almuerzo · vuelo', 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=800&q=70'],
                ] as $p)
                    <a href='/plans/{{ $p[0] }}' class='group w-64 shrink-0 snap-start overflow-hidden rounded-3xl border border-[#14110F]/10 bg-[#FAF6EF] shadow-sm transition hover:shadow-lg'>
                        <div class='relative h-40 overflow-hidden'>
                            <img src='{{ $p[4] }}' alt='{{ $p[1] }}' class='size-full object-cover transition duration-500 group-hover:scale-105'>
                            <span class='absolute left-3 top-3 rounded-full bg-[#FAF6EF]/90 px-3 py-1 text-[11px] font-medium'>{{ $p[2] }} €</span>
                        </div>
                        <div class='p-5'>
                            <p class='display text-xl tracking-tight'>{{ $p[1] }}</p>
                            <p class='mt-1.5 text-[13px] text-[#14110F]/55'>{{ $p[3] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-24'>
        <div class='overflow-hidden rounded-[2rem] border border-[#14110F]/10 bg-[#14110F] text-[#FAF6EF]'>
            <div class='grid lg:grid-cols-2'>
                <div class='relative min-h-[280px]'>
                    <img src='https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=70' alt='Villa Müller' class='absolute inset-0 size-full object-cover'>
                </div>
                <div class='p-8 sm:p-12'>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Plan Full</p>
                    <h2 class='display mt-3 text-3xl leading-tight tracking-tight sm:text-4xl'>Villa Müller,<br>cuatro noches con todo dentro.</h2>
                    <ul class='mt-6 space-y-3 text-sm text-[#FAF6EF]/75'>
                        <li class='flex gap-3'><flux:icon.check class='mt-0.5 size-4 text-[#C1892F]' /> 4 noches de villa privada para 2 personas</li>
                        <li class='flex gap-3'><flux:icon.check class='mt-0.5 size-4 text-[#C1892F]' /> 4 cenas en 2 restaurantes (35 € por persona)</li>
                        <li class='flex gap-3'><flux:icon.check class='mt-0.5 size-4 text-[#C1892F]' /> Bodega, barco, taxi tour, senderismo y mercadillo</li>
                        <li class='flex gap-3'><flux:icon.check class='mt-0.5 size-4 text-[#C1892F]' /> 10 trayectos de taxi: aeropuerto, playas, tours y mesas</li>
                    </ul>
                    <div class='mt-8 flex flex-wrap items-center gap-4'>
                        <p class='display text-3xl'>2.500 €<span class='ml-2 text-sm font-normal text-[#FAF6EF]/50'>/ 2 personas</span></p>
                        <a href='/plans/plan-full' class='rounded-full bg-[#C1892F] px-6 py-3 text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Ver el itinerario</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='bg-white py-16 sm:py-24'>
        <div class='mx-auto max-w-6xl px-4 sm:px-6'>
            <div class='flex flex-wrap items-end justify-between gap-4'>
                <div>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Del volcán a tu maleta</p>
                    <h2 class='display mt-3 text-3xl tracking-tight sm:text-4xl'>Recógelo donde ya estabas.</h2>
                    <p class='mt-3 max-w-md text-sm text-[#14110F]/60'>Añade productos a cualquier reserva y los dejamos preparados en la bodega, la finca o el restaurante que vas a visitar.</p>
                </div>
                <a href='/shop' class='text-sm underline underline-offset-4 hover:text-[#C1892F]'>Ver la tienda</a>
            </div>

            <div class='mt-8 grid grid-cols-2 gap-3 md:grid-cols-5'>
                @foreach ([
                    ['Vinos volcánicos', 'desde 14 €', 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?auto=format&fit=crop&w=600&q=70'],
                    ['Aloe vera', 'desde 12 €', 'https://images.unsplash.com/photo-1465101162946-4377e57745c3?auto=format&fit=crop&w=600&q=70'],
                    ['Vinoterapia', 'desde 21 €', 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=600&q=70'],
                    ['Argán', 'desde 9 €', 'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=600&q=70'],
                    ['Cochinilla', 'desde 22 €', 'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=600&q=70'],
                ] as $c)
                    <a href='/shop' class='group relative overflow-hidden rounded-2xl border border-[#14110F]/10'>
                        <img src='{{ $c[2] }}' alt='{{ $c[0] }}' class='h-40 w-full object-cover transition duration-500 group-hover:scale-105'>
                        <div class='absolute inset-0 bg-gradient-to-t from-[#14110F]/80 to-transparent'></div>
                        <div class='absolute bottom-3 left-3 text-[#FAF6EF]'>
                            <p class='text-sm font-medium'>{{ $c[0] }}</p>
                            <p class='text-[11px] text-[#FAF6EF]/70'>{{ $c[1] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 pb-20 sm:px-6'>
        <div class='rounded-[2rem] border border-[#14110F]/10 bg-[#FAF6EF] p-8 text-center shadow-sm sm:p-14'>
            <h2 class='display text-3xl leading-tight tracking-tight sm:text-4xl'>¿Empezamos por una frase o por un menú?</h2>
            <p class='mx-auto mt-3 max-w-md text-sm text-[#14110F]/60'>Las dos vías llegan al mismo sitio: un plan cerrado, un pago y los pedidos enviados a taxis, bodegas, restaurantes y tienda.</p>
            <div class='mt-7 flex flex-col justify-center gap-3 sm:flex-row'>
                <a href='/ai' class='rounded-full bg-[#14110F] px-7 py-3.5 text-sm font-medium text-[#FAF6EF] transition hover:bg-[#2A231E]'>Hablar con el concierge</a>
                <a href='/wizard' class='rounded-full border border-[#14110F]/20 px-7 py-3.5 text-sm font-medium transition hover:border-[#C1892F]'>Abrir reserva guiada</a>
            </div>
        </div>
    </section>

</x-site>
