<x-site title='Restaurantes · Malpaís'>

    <section class='border-b border-[#14110F]/10 bg-white'>
        <div class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Mesa reservada</p>
            <h1 class='display mt-3 text-4xl leading-tight tracking-tight sm:text-5xl'>Dónde se come en la isla.</h1>
            <p class='mt-4 max-w-lg text-[15px] text-[#14110F]/60'>Menús cerrados desde 28 € por persona. Reserva la mesa y te proponemos el taxi de ida y el regreso a casa.</p>

            <div class='no-bar mt-7 flex gap-2 overflow-x-auto pb-1'>
                @foreach (['Todos', 'Esta noche', 'Cerca de mí', 'Marisco', 'Autor', 'Terraza', 'Menú 35 €'] as $i => $f)
                    <button class='shrink-0 rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $f }}</button>
                @endforeach
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid gap-5 sm:grid-cols-2 lg:grid-cols-3'>
            @foreach ($restaurants as $r)
                <a href='/restaurants/{{ $r['slug'] }}' class='group overflow-hidden rounded-3xl border border-[#14110F]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg'>
                    <div class='relative h-48 overflow-hidden'>
                        <img src='{{ $r['image'] }}' alt='{{ $r['name'] }}' class='size-full object-cover transition duration-500 group-hover:scale-105'>
                        <span class='absolute right-3 top-3 rounded-full bg-[#FAF6EF]/92 px-3 py-1 text-[11px] font-medium'>Menú {{ $r['menu'] }} €</span>
                    </div>
                    <div class='p-5'>
                        <div class='flex items-start justify-between gap-3'>
                            <div>
                                <p class='display text-lg leading-tight tracking-tight'>{{ $r['name'] }}</p>
                                <p class='mt-0.5 text-xs text-[#14110F]/50'>{{ $r['cuisine'] }} · {{ $r['zone'] }}</p>
                            </div>
                            <span class='flex shrink-0 items-center gap-1 text-xs text-[#14110F]/60'><flux:icon.star variant='solid' class='size-3.5 text-[#C1892F]' /> {{ $r['rating'] }}</span>
                        </div>
                        <p class='mt-2.5 text-[13px] leading-relaxed text-[#14110F]/55'>{{ $r['summary'] }}</p>
                        <div class='mt-4 flex flex-wrap gap-1.5 border-t border-[#14110F]/8 pt-3'>
                            @foreach (array_slice($r['slots'], 0, 4) as $s)
                                <span class='rounded-full bg-[#FAF6EF] px-2.5 py-1 text-[11px] text-[#14110F]/65'>{{ $s }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

</x-site>
