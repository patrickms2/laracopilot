<x-site title='Tours y bodegas · Malpaís'>

    <section class='border-b border-[#14110F]/10 bg-white'>
        <div class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Tours</p>
            <h1 class='display mt-3 text-4xl leading-tight tracking-tight sm:text-5xl'>Bodegas, mar y malpaís.</h1>
            <p class='mt-4 max-w-lg text-[15px] text-[#14110F]/60'>Toda actividad puede reservarse con el taxi de recogida y el regreso ya incluidos.</p>

            <div class='no-bar mt-7 flex gap-2 overflow-x-auto pb-1'>
                @foreach (['Todo', 'Bodega', 'Barco', 'Taxi tour', 'Senderismo', 'Mercadillo', 'Cultural', 'Finca'] as $i => $f)
                    <button class='shrink-0 rounded-full border px-4 py-2 text-xs transition hover:border-[#C1892F] {{ $i === 0 ? 'border-[#14110F] bg-[#14110F] text-[#FAF6EF]' : 'border-[#14110F]/12' }}'>{{ $f }}</button>
                @endforeach
            </div>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid gap-5 sm:grid-cols-2 lg:grid-cols-3'>
            @foreach ($tours as $t)
                <a href='/tours/{{ $t['slug'] }}' class='group overflow-hidden rounded-3xl border border-[#14110F]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg'>
                    <div class='relative h-48 overflow-hidden'>
                        <img src='{{ $t['image'] }}' alt='{{ $t['name'] }}' class='size-full object-cover transition duration-500 group-hover:scale-105'>
                        <span class='absolute left-3 top-3 rounded-full bg-[#FAF6EF]/92 px-3 py-1 text-[11px] font-medium'>{{ $t['type'] }}</span>
                    </div>
                    <div class='p-5'>
                        <div class='flex items-start justify-between gap-3'>
                            <p class='text-sm font-medium leading-snug'>{{ $t['name'] }}</p>
                            <span class='flex shrink-0 items-center gap-1 text-xs text-[#14110F]/60'><flux:icon.star variant='solid' class='size-3.5 text-[#C1892F]' /> {{ $t['rating'] }}</span>
                        </div>
                        <p class='mt-2 text-[13px] leading-relaxed text-[#14110F]/55'>{{ $t['summary'] }}</p>
                        <div class='mt-4 flex items-center justify-between border-t border-[#14110F]/8 pt-3'>
                            <span class='text-xs text-[#14110F]/50'>{{ $t['zone'] }} · {{ $t['duration'] }}</span>
                            <span class='display text-lg'>{{ $t['price'] }} €</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

</x-site>
