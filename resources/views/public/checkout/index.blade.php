<x-site title='Pago · Malpaís'>

    <div class='mx-auto max-w-2xl px-4 py-10 sm:px-6'>

        <div class='flex items-center gap-3 text-[11px] uppercase tracking-widest text-[#14110F]/45'>
            <span class='text-[#14110F]'>1 Resumen</span>
            <span class='h-px flex-1 bg-[#14110F]/15'></span>
            <span class='text-[#C1892F]'>2 Pago</span>
            <span class='h-px flex-1 bg-[#14110F]/15'></span>
            <span>3 Confirmación</span>
        </div>

        <h1 class='display mt-6 text-3xl tracking-tight'>Un pago para toda la cadena</h1>
        <p class='mt-2 text-[15px] text-[#14110F]/60'>Al verificarse el pago emitimos los pedidos a cada proveedor.</p>

        <div class='mt-7 divide-y divide-[#14110F]/8 rounded-3xl border border-[#14110F]/10 bg-white shadow-sm'>
            @foreach ([
                ['truck', 'Taxi · Villa Müller → Bodega El Grifo', '20 jun · 16:00', '20 €'],
                ['sparkles', 'Visita y cata · El Grifo · 2 pax', '20 jun · 16:30', '100 €'],
                ['truck', 'Taxi · Bodega → La Cascada', '20 jun · 18:45', '20 €'],
                ['building-storefront', 'Cena La Cascada · 2 menús', '20 jun · 19:00', '70 €'],
                ['truck', 'Taxi de regreso a tu ubicación', '20 jun · 21:30', '20 €'],
                ['shopping-bag', 'Caja de 3 Malvasías · recoger en bodega', 'Preparado 16:30', '42 €'],
            ] as $l)
                <div class='flex items-center gap-3 px-5 py-4'>
                    <span class='flex size-9 shrink-0 items-center justify-center rounded-xl bg-[#FAF6EF] text-[#C1892F]'>
                        <flux:icon :name="$l[0]" class='size-4' />
                    </span>
                    <div class='min-w-0 flex-1'>
                        <p class='truncate text-[13px] font-medium'>{{ $l[1] }}</p>
                        <p class='text-[11px] text-[#14110F]/50'>{{ $l[2] }}</p>
                    </div>
                    <span class='text-[13px] font-medium'>{{ $l[3] }}</span>
                </div>
            @endforeach
            <div class='flex items-center justify-between bg-[#14110F] px-5 py-4 text-[#FAF6EF]'>
                <span class='text-xs uppercase tracking-widest text-[#FAF6EF]/55'>Total a pagar</span>
                <span class='display text-2xl'>272 €</span>
            </div>
        </div>

        <form onsubmit="alert('Available in Build mode'); return false;" class='mt-7 rounded-3xl border border-[#14110F]/10 bg-white p-6 shadow-sm'>
            <p class='display text-xl tracking-tight'>Datos de pago</p>

            <div class='mt-5 grid gap-4'>
                <flux:field>
                    <flux:label>Nombre y apellidos</flux:label>
                    <flux:input value='Sofía Marrero' />
                </flux:field>

                <div class='grid gap-4 sm:grid-cols-2'>
                    <flux:field>
                        <flux:label>Email</flux:label>
                        <flux:input type='email' value='sofia@example.com' />
                    </flux:field>
                    <flux:field>
                        <flux:label>Teléfono</flux:label>
                        <flux:input value='+34 620 114 902' />
                    </flux:field>
                </div>

                <div class='rounded-2xl border border-[#14110F]/10 p-4'>
                    <div class='flex gap-2'>
                        <button type='button' class='flex-1 rounded-xl border border-[#C1892F] bg-[#FAF6EF] px-4 py-2.5 text-xs font-medium'>Tarjeta</button>
                        <button type='button' class='flex-1 rounded-xl border border-[#14110F]/12 px-4 py-2.5 text-xs'>Apple Pay</button>
                        <button type='button' class='flex-1 rounded-xl border border-[#14110F]/12 px-4 py-2.5 text-xs'>Bizum</button>
                    </div>
                    <div class='mt-4 grid gap-4'>
                        <flux:field>
                            <flux:label>Número de tarjeta</flux:label>
                            <flux:input value='4242 4242 4242 4242' />
                        </flux:field>
                        <div class='grid grid-cols-2 gap-4'>
                            <flux:field>
                                <flux:label>Caducidad</flux:label>
                                <flux:input value='09/28' />
                            </flux:field>
                            <flux:field>
                                <flux:label>CVC</flux:label>
                                <flux:input value='123' />
                            </flux:field>
                        </div>
                    </div>
                </div>

                <flux:checkbox checked label='Acepto las condiciones y la política de cancelación' />
            </div>

            <button type='submit' class='mt-6 w-full rounded-full bg-[#C1892F] px-5 py-3.5 text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Pagar 272 € y confirmar</button>
            <a href='/checkout/confirmacion' class='mt-2 block rounded-full border border-[#14110F]/15 px-5 py-3 text-center text-sm transition hover:border-[#C1892F]'>Ver ejemplo de confirmación</a>

            <p class='mt-4 flex items-center justify-center gap-2 text-[11px] text-[#14110F]/45'>
                <flux:icon.lock-closed class='size-3.5' /> Pago cifrado · los proveedores reciben el pedido tras la verificación
            </p>
        </form>

    </div>

</x-site>
