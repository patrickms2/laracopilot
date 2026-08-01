<x-site title='Concierge IA · Malpaís' active='ai'>

    <div class='mx-auto max-w-2xl px-4 pb-32 pt-6 sm:px-6'>

        <div class='flex items-center justify-between'>
            <div>
                <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Modo IA</p>
                <h1 class='display mt-1 text-2xl tracking-tight'>Concierge de la isla</h1>
            </div>
            <a href='/wizard' class='rounded-full border border-[#14110F]/15 px-4 py-2 text-xs transition hover:border-[#C1892F]'>Modo guiado</a>
        </div>

        <div class='mt-6 space-y-4'>

            <div class='flex gap-3'>
                <div class='mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-[#14110F]'><span class='size-2 animate-pulse rounded-full bg-[#C1892F]'></span></div>
                <div class='rounded-3xl rounded-tl-md border border-[#14110F]/10 bg-white p-4 text-sm leading-relaxed shadow-sm'>
                    Hola 👋 Soy el concierge de Malpaís. Dime qué te apetece hoy y yo encadeno taxi, reserva y productos. <span class='text-[#14110F]/55'>Responde con el número.</span>
                    <div class='mt-3 grid gap-2'>
                        <button data-reveal='m2' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-left text-sm transition hover:border-[#C1892F] hover:bg-[#FAF6EF]'><span class='display text-[#C1892F]'>1</span> Visitar una bodega</button>
                        <button data-reveal='m2' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-left text-sm transition hover:border-[#C1892F] hover:bg-[#FAF6EF]'><span class='display text-[#C1892F]'>2</span> Cenar esta noche</button>
                        <button data-reveal='m2' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-left text-sm transition hover:border-[#C1892F] hover:bg-[#FAF6EF]'><span class='display text-[#C1892F]'>3</span> Un taxi ahora mismo</button>
                        <button data-reveal='mplan' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-left text-sm transition hover:border-[#C1892F] hover:bg-[#FAF6EF]'><span class='display text-[#C1892F]'>4</span> Un plan de varios días</button>
                    </div>
                </div>
            </div>

            <div id='mplan' class='hidden space-y-4'>
                <div class='flex justify-end'>
                    <div class='max-w-[80%] rounded-3xl rounded-br-md bg-[#14110F] px-4 py-3 text-sm text-[#FAF6EF]'>4 · Un plan de varios días</div>
                </div>
                <div class='flex gap-3'>
                    <div class='mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-[#14110F]'><span class='size-2 rounded-full bg-[#C1892F]'></span></div>
                    <div class='rounded-3xl rounded-tl-md border border-[#14110F]/10 bg-white p-4 text-sm shadow-sm'>
                        Te propongo el <strong>Plan Full · Villa Müller</strong>: 4 noches, taxi de aeropuerto ida y vuelta, bodega, barco, taxi tour, senderismo, mercadillo y 4 cenas incluidas.
                        <div class='mt-3 overflow-hidden rounded-2xl border border-[#14110F]/10'>
                            <img src='https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=70' alt='Villa Müller' class='h-32 w-full object-cover'>
                            <div class='flex items-center justify-between bg-[#FAF6EF] px-4 py-3'>
                                <span class='text-sm font-medium'>2.500 € · 2 personas</span>
                                <a href='/plans/plan-full' class='rounded-full bg-[#14110F] px-4 py-2 text-xs text-[#FAF6EF]'>Ver itinerario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id='m2' class='hidden space-y-4'>
                <div class='flex justify-end'>
                    <div class='max-w-[80%] rounded-3xl rounded-br-md bg-[#14110F] px-4 py-3 text-sm text-[#FAF6EF]'>1 · Visitar una bodega mañana por la tarde</div>
                </div>

                <div class='flex gap-3'>
                    <div class='mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-[#14110F]'><span class='size-2 rounded-full bg-[#C1892F]'></span></div>
                    <div class='w-full rounded-3xl rounded-tl-md border border-[#14110F]/10 bg-white p-4 text-sm shadow-sm'>
                        Te he localizado. Salimos desde aquí, ¿correcto?
                        <div class='mt-3 overflow-hidden rounded-2xl border border-[#14110F]/10'>
                            <iframe src='https://maps.google.com/maps?q=Puerto+del+Carmen,+Lanzarote&z=13&output=embed' class='h-36 w-full' loading='lazy'></iframe>
                            <div class='flex items-center gap-2 bg-[#FAF6EF] px-4 py-3 text-xs'>
                                <flux:icon.map-pin class='size-4 text-[#C1892F]' /> Puerto del Carmen · Villa Müller <span class='ml-auto rounded-full bg-emerald-100 px-2 py-0.5 text-[11px] text-emerald-700'>Confirmado</span>
                            </div>
                        </div>

                        <p class='mt-4 text-[13px] text-[#14110F]/60'>¿Cuántas personas?</p>
                        <div class='mt-2 flex gap-2'>
                            @foreach ([1,2,3,4,5,6] as $n)
                                <button data-group='pax' data-choice class='size-9 rounded-full border border-[#14110F]/12 text-sm transition hover:border-[#C1892F] {{ $n === 2 ? 'bg-[#14110F] text-[#FAF6EF]' : '' }}'>{{ $n }}</button>
                            @endforeach
                        </div>

                        <div class='mt-4 grid gap-2'>
                            <p class='text-[13px] text-[#14110F]/60'>Elige bodega (responde con el número):</p>
                            @foreach (array_slice($tours, 0, 2) as $i => $t)
                                <button data-reveal='m3' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 p-2 text-left transition hover:border-[#C1892F] hover:bg-[#FAF6EF]'>
                                    <span class='display w-5 text-center text-[#C1892F]'>{{ $i + 1 }}</span>
                                    <img src='{{ $t['image'] }}' alt='' class='size-12 rounded-xl object-cover'>
                                    <span class='min-w-0 flex-1'>
                                        <span class='block truncate text-sm font-medium'>{{ $t['name'] }}</span>
                                        <span class='block text-xs text-[#14110F]/55'>{{ $t['zone'] }} · {{ $t['duration'] }} · {{ $t['price'] }} €/{{ $t['unit'] }}</span>
                                    </span>
                                </button>
                            @endforeach
                            <button data-reveal='m3' class='flex items-center gap-3 rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-left text-sm transition hover:border-[#C1892F]'><span class='display text-[#C1892F]'>3</span> Que elija el concierge por mí</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id='m3' class='hidden space-y-4'>
                <div class='flex justify-end'>
                    <div class='max-w-[80%] rounded-3xl rounded-br-md bg-[#14110F] px-4 py-3 text-sm text-[#FAF6EF]'>1 · Bodega El Grifo · 2 personas</div>
                </div>

                <div class='flex gap-3'>
                    <div class='mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-[#14110F]'><span class='size-2 rounded-full bg-[#C1892F]'></span></div>
                    <div class='w-full rounded-3xl rounded-tl-md border border-[#14110F]/10 bg-white p-4 text-sm shadow-sm'>
                        Hay hueco mañana a las <strong>16:30</strong>. He preparado la cadena completa: taxi de recogida en tu villa, visita con cata, mesa después y regreso a tu ubicación.

                        <div class='mt-4 divide-y divide-[#14110F]/8 rounded-2xl border border-[#14110F]/10'>
                            @foreach ([
                                ['Taxi villa → El Grifo · 16:00', '20 €', true],
                                ['Visita + cata El Grifo · 2 pax', '100 €', true],
                                ['Taxi bodega → La Cascada · 18:45', '20 €', true],
                                ['Cena La Cascada · 2 menús', '70 €', true],
                                ['Taxi regreso a la villa · 21:30', '20 €', true],
                                ['Caja de 3 Malvasías (recoger en bodega)', '42 €', false],
                            ] as $row)
                                <label class='flex cursor-pointer items-center gap-3 px-4 py-3'>
                                    <input type='checkbox' {{ $row[2] ? 'checked' : '' }} class='size-4 rounded border-[#14110F]/25 text-[#C1892F] focus:ring-[#C1892F]'>
                                    <span class='flex-1 text-[13px]'>{{ $row[0] }}</span>
                                    <span class='text-[13px] font-medium'>{{ $row[1] }}</span>
                                </label>
                            @endforeach
                        </div>

                        <div class='mt-4 flex items-center justify-between rounded-2xl bg-[#14110F] px-4 py-3 text-[#FAF6EF]'>
                            <span class='text-xs uppercase tracking-widest text-[#FAF6EF]/55'>Total estimado</span>
                            <span class='display text-xl'>272 €</span>
                        </div>

                        <div class='mt-3 grid gap-2 sm:grid-cols-2'>
                            <a href='/checkout' class='rounded-full bg-[#C1892F] px-5 py-3 text-center text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Confirmar y pagar</a>
                            <button data-reveal='m4' class='rounded-full border border-[#14110F]/15 px-5 py-3 text-sm transition hover:border-[#C1892F]'>Cambiar algo</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id='m4' class='hidden flex gap-3'>
                <div class='mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-[#14110F]'><span class='size-2 rounded-full bg-[#C1892F]'></span></div>
                <div class='rounded-3xl rounded-tl-md border border-[#14110F]/10 bg-white p-4 text-sm shadow-sm'>
                    Claro, ¿qué ajusto?
                    <div class='mt-3 grid gap-2'>
                        <a href='/tours' class='rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-sm transition hover:border-[#C1892F]'><span class='display mr-2 text-[#C1892F]'>1</span> Otra bodega o tour</a>
                        <a href='/restaurants' class='rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-sm transition hover:border-[#C1892F]'><span class='display mr-2 text-[#C1892F]'>2</span> Otro restaurante</a>
                        <a href='/taxi' class='rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-sm transition hover:border-[#C1892F]'><span class='display mr-2 text-[#C1892F]'>3</span> Cambiar horarios de taxi</a>
                        <a href='/shop' class='rounded-2xl border border-[#14110F]/12 px-4 py-2.5 text-sm transition hover:border-[#C1892F]'><span class='display mr-2 text-[#C1892F]'>4</span> Añadir más productos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class='fixed inset-x-0 bottom-16 z-30 border-t border-[#14110F]/10 bg-[#FAF6EF]/95 p-3 backdrop-blur md:bottom-0'>
        <form onsubmit="alert('Available in Build mode'); return false;" class='mx-auto flex max-w-2xl items-center gap-2'>
            <input type='text' placeholder='Escribe o elige un número…' class='h-11 flex-1 rounded-full border border-[#14110F]/15 bg-white px-4 text-sm outline-none placeholder:text-[#14110F]/35 focus:border-[#C1892F]'>
            <button type='submit' class='flex size-11 items-center justify-center rounded-full bg-[#14110F] text-[#FAF6EF]'>
                <flux:icon.paper-airplane class='size-4' />
            </button>
        </form>
    </div>

    <script>
        document.querySelectorAll('[data-reveal]').forEach(function (b) {
            b.addEventListener('click', function () {
                var el = document.getElementById(b.dataset.reveal);
                if (!el) return;
                el.classList.remove('hidden');
                setTimeout(function () { el.scrollIntoView({ behavior: 'smooth', block: 'center' }); }, 60);
            });
        });
        document.querySelectorAll('[data-choice]').forEach(function (b) {
            b.addEventListener('click', function () {
                document.querySelectorAll('[data-group=' + b.dataset.group + ']').forEach(function (x) {
                    x.classList.remove('bg-[#14110F]', 'text-[#FAF6EF]');
                });
                b.classList.add('bg-[#14110F]', 'text-[#FAF6EF]');
            });
        });
    </script>

</x-site>
