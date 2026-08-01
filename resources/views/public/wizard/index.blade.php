<x-site title='Reserva guiada · Malpaís' active='wizard'>

    <div class='mx-auto max-w-2xl px-4 pb-24 pt-6 sm:px-6'>

        <div class='flex items-center justify-between'>
            <div>
                <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Modo guiado</p>
                <h1 class='display mt-1 text-2xl tracking-tight'>Reserva en 5 pasos</h1>
            </div>
            <a href='/ai' class='rounded-full border border-[#14110F]/15 px-4 py-2 text-xs transition hover:border-[#C1892F]'>Modo IA</a>
        </div>

        <div class='mt-5'>
            <div class='flex items-center justify-between text-[11px] uppercase tracking-widest text-[#14110F]/45'>
                <span>Paso <span id='stepno'>1</span> de 5</span>
                <span>Todo preseleccionado</span>
            </div>
            <div class='mt-2 h-1 w-full overflow-hidden rounded-full bg-[#14110F]/10'>
                <div id='bar' class='h-full w-1/5 rounded-full bg-[#C1892F] transition-all duration-300'></div>
            </div>
        </div>

        <!-- Paso 1 -->
        <section class='step mt-8'>
            <h2 class='display text-xl tracking-tight'>¿Qué necesitas?</h2>
            <p class='mt-1 text-sm text-[#14110F]/55'>Menú inicial</p>
            <div class='mt-4 grid gap-2'>
                <button data-go='2' class='flex items-center justify-between rounded-2xl border border-[#C1892F] bg-white px-5 py-4 text-left shadow-sm transition hover:shadow-md'>
                    <span><span class='text-sm font-medium'>Reserva</span><span class='mt-0.5 block text-xs text-[#14110F]/55'>Taxi, tour, restaurante o combinados</span></span>
                    <flux:icon.arrow-right class='size-4 text-[#C1892F]' />
                </button>
                <a href='/shop' class='flex items-center justify-between rounded-2xl border border-[#14110F]/12 px-5 py-4 transition hover:border-[#C1892F] hover:bg-white'>
                    <span><span class='text-sm font-medium'>Compra</span><span class='mt-0.5 block text-xs text-[#14110F]/55'>Vinos, aloe vera, argán, cochinilla</span></span>
                    <flux:icon.arrow-right class='size-4 text-[#14110F]/40' />
                </a>
                <a href='/tours' class='flex items-center justify-between rounded-2xl border border-[#14110F]/12 px-5 py-4 transition hover:border-[#C1892F] hover:bg-white'>
                    <span><span class='text-sm font-medium'>Información</span><span class='mt-0.5 block text-xs text-[#14110F]/55'>Bodegas, playas, horarios y precios</span></span>
                    <flux:icon.arrow-right class='size-4 text-[#14110F]/40' />
                </a>
                <a href='/plans' class='flex items-center justify-between rounded-2xl border border-[#14110F]/12 px-5 py-4 transition hover:border-[#C1892F] hover:bg-white'>
                    <span><span class='text-sm font-medium'>Plan Day</span><span class='mt-0.5 block text-xs text-[#14110F]/55'>Un día cerrado desde 350 €</span></span>
                    <flux:icon.arrow-right class='size-4 text-[#14110F]/40' />
                </a>
                <a href='/plans/plan-full' class='flex items-center justify-between rounded-2xl border border-[#14110F]/12 px-5 py-4 transition hover:border-[#C1892F] hover:bg-white'>
                    <span><span class='text-sm font-medium'>Plan Full</span><span class='mt-0.5 block text-xs text-[#14110F]/55'>Villa Müller · 4 noches con todo</span></span>
                    <flux:icon.arrow-right class='size-4 text-[#14110F]/40' />
                </a>
            </div>
        </section>

        <!-- Paso 2 -->
        <section class='step mt-8 hidden'>
            <h2 class='display text-xl tracking-tight'>¿Qué reservamos?</h2>
            <p class='mt-1 text-sm text-[#14110F]/55'>Menú reserva · lo más pedido va marcado</p>
            <div class='mt-4 grid gap-2 sm:grid-cols-2'>
                @foreach ([
                    ['Taxi', 'Recogida inmediata o programada', false],
                    ['Tour', 'Barco, senderismo, mercadillo', false],
                    ['Restaurante', 'Mesa con menú incluido', false],
                    ['Taxi + Visita', 'Bodega con recogida y regreso', true],
                    ['Taxi + Tour', 'Tour con traslados incluidos', false],
                    ['Taxi + Restaurante', 'Cena con ida y vuelta', false],
                ] as $o)
                    <button data-choice data-group='res' class='rounded-2xl border px-5 py-4 text-left transition hover:border-[#C1892F] {{ $o[2] ? 'border-[#C1892F] bg-white shadow-sm' : 'border-[#14110F]/12' }}'>
                        <span class='text-sm font-medium'>{{ $o[0] }}</span>
                        <span class='mt-0.5 block text-xs text-[#14110F]/55'>{{ $o[1] }}</span>
                    </button>
                @endforeach
            </div>
            <div class='mt-6 flex gap-2'>
                <button data-go='1' class='rounded-full border border-[#14110F]/15 px-5 py-3 text-sm'>Atrás</button>
                <button data-go='3' class='flex-1 rounded-full bg-[#14110F] px-5 py-3 text-sm text-[#FAF6EF]'>Continuar con Taxi + Visita</button>
            </div>
        </section>

        <!-- Paso 3 -->
        <section class='step mt-8 hidden'>
            <h2 class='display text-xl tracking-tight'>Detalles</h2>
            <p class='mt-1 text-sm text-[#14110F]/55'>Solo lo imprescindible</p>

            <div class='mt-4 overflow-hidden rounded-2xl border border-[#14110F]/10 bg-white shadow-sm'>
                <iframe src='https://maps.google.com/maps?q=La+Geria,+Lanzarote&z=12&output=embed' class='h-40 w-full' loading='lazy'></iframe>
                <div class='flex items-center gap-2 border-t border-[#14110F]/8 px-4 py-3 text-xs'>
                    <flux:icon.map-pin class='size-4 text-[#C1892F]' /> Recogida: Villa Müller, Puerto del Carmen
                    <span class='ml-auto rounded-full bg-emerald-100 px-2 py-0.5 text-[11px] text-emerald-700'>Ubicación detectada</span>
                </div>
            </div>

            <div class='mt-4 space-y-4 rounded-2xl border border-[#14110F]/10 bg-white p-5 shadow-sm'>
                <div>
                    <p class='text-[13px] font-medium'>Bodega</p>
                    <div class='mt-2 grid gap-2'>
                        @foreach (array_slice($tours, 0, 2) as $i => $t)
                            <button data-choice data-group='bod' class='flex items-center gap-3 rounded-xl border p-2 text-left transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#C1892F] bg-[#FAF6EF]' : 'border-[#14110F]/12' }}'>
                                <img src='{{ $t['image'] }}' alt='' class='size-11 rounded-lg object-cover'>
                                <span class='min-w-0 flex-1'>
                                    <span class='block truncate text-sm'>{{ $t['name'] }}</span>
                                    <span class='block text-xs text-[#14110F]/55'>{{ $t['price'] }} €/{{ $t['unit'] }} · {{ $t['duration'] }}</span>
                                </span>
                            </button>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class='text-[13px] font-medium'>Personas</p>
                    <div class='mt-2 flex gap-2'>
                        @foreach ([1,2,3,4,5,6] as $n)
                            <button data-choice data-group='pax' class='size-10 rounded-full border text-sm transition hover:border-[#C1892F] {{ $n === 2 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $n }}</button>
                        @endforeach
                    </div>
                </div>

                <div class='grid gap-3 sm:grid-cols-2'>
                    <div>
                        <p class='text-[13px] font-medium'>Fecha</p>
                        <div class='mt-2 flex gap-2'>
                            @foreach (['Hoy', 'Mañana', '20 jun'] as $i => $d)
                                <button data-choice data-group='fecha' class='rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 1 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $d }}</button>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p class='text-[13px] font-medium'>Hora</p>
                        <div class='mt-2 flex gap-2'>
                            @foreach (['10:30', '12:00', '16:30'] as $i => $h)
                                <button data-choice data-group='hora' class='rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 2 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $h }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class='mt-6 flex gap-2'>
                <button data-go='2' class='rounded-full border border-[#14110F]/15 px-5 py-3 text-sm'>Atrás</button>
                <button data-go='4' class='flex-1 rounded-full bg-[#14110F] px-5 py-3 text-sm text-[#FAF6EF]'>Ver propuesta</button>
            </div>
        </section>

        <!-- Paso 4 -->
        <section class='step mt-8 hidden'>
            <h2 class='display text-xl tracking-tight'>Tu cadena propuesta</h2>
            <p class='mt-1 text-sm text-[#14110F]/55'>Desmarca lo que no quieras. El resto ya está listo.</p>

            <div class='mt-4 divide-y divide-[#14110F]/8 rounded-2xl border border-[#14110F]/10 bg-white shadow-sm'>
                @foreach ([
                    ['16:00', 'Taxi Villa Müller → Bodega El Grifo', '20 €', true],
                    ['16:30', 'Visita guiada y cata · 2 personas', '100 €', true],
                    ['18:45', 'Taxi Bodega → Restaurante La Cascada', '20 €', true],
                    ['19:00', 'Cena La Cascada · 2 menús degustación', '70 €', true],
                    ['21:30', 'Taxi de regreso a tu ubicación', '20 €', true],
                ] as $r)
                    <label class='flex cursor-pointer items-start gap-3 px-4 py-3.5'>
                        <input type='checkbox' {{ $r[3] ? 'checked' : '' }} class='mt-1 size-4 rounded border-[#14110F]/25 text-[#C1892F] focus:ring-[#C1892F]'>
                        <span class='flex-1'>
                            <span class='block text-[11px] uppercase tracking-widest text-[#C1892F]'>{{ $r[0] }}</span>
                            <span class='block text-sm'>{{ $r[1] }}</span>
                        </span>
                        <span class='text-sm font-medium'>{{ $r[2] }}</span>
                    </label>
                @endforeach
            </div>

            <p class='mt-6 text-[13px] font-medium'>Recoge ya preparado en la bodega</p>
            <div class='no-bar mt-2 flex gap-3 overflow-x-auto pb-2'>
                @foreach (array_slice($products, 0, 4) as $p)
                    <label class='w-40 shrink-0 cursor-pointer rounded-2xl border border-[#14110F]/10 bg-white p-3 shadow-sm transition hover:border-[#C1892F]'>
                        <img src='{{ $p['image'] }}' alt='' class='h-20 w-full rounded-xl object-cover'>
                        <span class='mt-2 block truncate text-[13px] font-medium'>{{ $p['name'] }}</span>
                        <span class='mt-1 flex items-center justify-between text-xs text-[#14110F]/55'>{{ $p['price'] }} € <input type='checkbox' class='size-4 rounded border-[#14110F]/25 text-[#C1892F] focus:ring-[#C1892F]'></span>
                    </label>
                @endforeach
            </div>

            <div class='mt-6 flex gap-2'>
                <button data-go='3' class='rounded-full border border-[#14110F]/15 px-5 py-3 text-sm'>Atrás</button>
                <button data-go='5' class='flex-1 rounded-full bg-[#14110F] px-5 py-3 text-sm text-[#FAF6EF]'>Aceptar propuesta</button>
            </div>
        </section>

        <!-- Paso 5 -->
        <section class='step mt-8 hidden'>
            <h2 class='display text-xl tracking-tight'>Resumen</h2>
            <p class='mt-1 text-sm text-[#14110F]/55'>Un solo pago. Después enviamos los pedidos a cada proveedor.</p>

            <div class='mt-4 rounded-2xl border border-[#14110F]/10 bg-white p-5 shadow-sm'>
                <div class='space-y-2 text-sm'>
                    <div class='flex justify-between'><span class='text-[#14110F]/60'>Taxis (3 trayectos)</span><span>60 €</span></div>
                    <div class='flex justify-between'><span class='text-[#14110F]/60'>Visita y cata · 2 pax</span><span>100 €</span></div>
                    <div class='flex justify-between'><span class='text-[#14110F]/60'>Cena La Cascada · 2 menús</span><span>70 €</span></div>
                    <div class='flex justify-between'><span class='text-[#14110F]/60'>Caja de 3 Malvasías</span><span>42 €</span></div>
                    <div class='flex justify-between'><span class='text-[#14110F]/60'>Gestión concierge</span><span>8 €</span></div>
                </div>
                <div class='mt-4 flex items-center justify-between border-t border-[#14110F]/10 pt-4'>
                    <span class='text-xs uppercase tracking-widest text-[#14110F]/45'>Total</span>
                    <span class='display text-2xl'>280 €</span>
                </div>
            </div>

            <div class='mt-6 flex gap-2'>
                <button data-go='4' class='rounded-full border border-[#14110F]/15 px-5 py-3 text-sm'>Atrás</button>
                <a href='/checkout' class='flex-1 rounded-full bg-[#C1892F] px-5 py-3 text-center text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Ir al pago</a>
            </div>
        </section>

    </div>

    <script>
        var steps = Array.prototype.slice.call(document.querySelectorAll('.step'));
        function go(i) {
            steps.forEach(function (s, k) { s.classList.toggle('hidden', k !== i); });
            document.getElementById('bar').style.width = ((i + 1) / steps.length * 100) + '%';
            document.getElementById('stepno').textContent = (i + 1);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        document.querySelectorAll('[data-go]').forEach(function (b) {
            b.addEventListener('click', function () { go(parseInt(b.dataset.go, 10) - 1); });
        });
        document.querySelectorAll('[data-choice]').forEach(function (b) {
            b.addEventListener('click', function () {
                document.querySelectorAll('[data-group=' + b.dataset.group + ']').forEach(function (x) {
                    x.classList.remove('border-[#C1892F]', 'bg-[#14110F]', 'text-[#FAF6EF]', 'bg-[#FAF6EF]', 'border-[#14110F]', 'bg-white', 'shadow-sm');
                    x.classList.add('border-[#14110F]/12');
                });
                b.classList.remove('border-[#14110F]/12');
                b.classList.add('border-[#C1892F]', 'bg-white', 'shadow-sm');
            });
        });
    </script>

</x-site>
