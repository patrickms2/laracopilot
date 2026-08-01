<x-site title='Tienda · Malpaís' active='shop'>

    <section class='border-b border-[#14110F]/10 bg-white'>
        <div class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Tienda</p>
            <h1 class='display mt-3 text-4xl leading-tight tracking-tight sm:text-5xl'>Del volcán a tu maleta.</h1>
            <p class='mt-4 max-w-lg text-[15px] text-[#14110F]/60'>Elige y recógelo preparado en el punto que ya vas a visitar, o pídelo en tu villa.</p>

            <div class='no-bar mt-7 flex gap-2 overflow-x-auto pb-1'>
                @foreach (['Todo', 'Vinos', 'Aloe Vera', 'Vinoterapia', 'Argán', 'Cochinilla', 'Packs'] as $i => $c)
                    <button class='shrink-0 rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $c }}</button>
                @endforeach
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid grid-cols-2 gap-4 lg:grid-cols-4'>
            @foreach ($products as $p)
                <div class='group overflow-hidden rounded-3xl border border-[#14110F]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg'>
                    <div class='relative h-40 overflow-hidden sm:h-48'>
                        <img src='{{ $p['image'] }}' alt='{{ $p['name'] }}' class='size-full object-cover transition duration-500 group-hover:scale-105'>
                        <span class='absolute left-2 top-2 rounded-full bg-[#FAF6EF]/92 px-2.5 py-0.5 text-[10px] font-medium'>{{ $p['category'] }}</span>
                    </div>
                    <div class='p-4'>
                        <p class='text-[13px] font-medium leading-snug'>{{ $p['name'] }}</p>
                        <p class='mt-1 text-[11px] text-[#14110F]/50'>{{ $p['note'] }}</p>
                        <p class='mt-2 flex items-center gap-1 text-[11px] text-[#14110F]/50'><flux:icon.map-pin class='size-3' /> {{ $p['pickup'] }}</p>
                        <div class='mt-3 flex items-center justify-between'>
                            <span class='display text-lg'>{{ $p['price'] }} €</span>
                            <button onclick="alert('Available in Build mode')" class='rounded-full bg-[#14110F] px-4 py-1.5 text-[11px] text-[#FAF6EF] transition hover:bg-[#2A231E]'>Añadir</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class='mt-10 flex flex-col items-center justify-between gap-4 rounded-3xl border border-[#14110F]/10 bg-white p-6 shadow-sm sm:flex-row'>
            <div>
                <p class='text-sm font-medium'>3 artículos en tu cesta · 68 €</p>
                <p class='mt-1 text-[13px] text-[#14110F]/55'>Recogida preparada en Bodega El Grifo el 20 de junio a las 16:30.</p>
            </div>
            <a href='/checkout' class='rounded-full bg-[#C1892F] px-6 py-3 text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Ir al pago</a>
        </div>
    </section>

</x-site>
