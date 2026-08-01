<x-site title='Planes · Malpaís' active='plans'>

    <section class='border-b border-[#14110F]/10 bg-white'>
        <div class='mx-auto max-w-6xl px-4 py-12 sm:px-6 sm:py-16'>
            <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Planes</p>
            <h1 class='display mt-3 max-w-xl text-4xl leading-tight tracking-tight sm:text-5xl'>Días completos, precio cerrado.</h1>
            <p class='mt-4 max-w-lg text-[15px] leading-relaxed text-[#14110F]/60'>Cada plan incluye taxis, actividad y mesa. Se reservan con un pago y se despachan automáticamente a cada proveedor.</p>
        </div>
    </section>

    <section class='mx-auto max-w-6xl px-4 py-12 sm:px-6'>
        <div class='grid gap-5 md:grid-cols-2 lg:grid-cols-3'>
            @foreach ($plans as $plan)
                @continue($plan['slug'] === 'plan-full')
                <a href='/plans/{{ $plan['slug'] }}' class='group overflow-hidden rounded-3xl border border-[#14110F]/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg'>
                    <div class='relative h-44 overflow-hidden'>
                        <img src='{{ $plan['image'] }}' alt='{{ $plan['name'] }}' class='size-full object-cover transition duration-500 group-hover:scale-105'>
                        <div class='absolute inset-0 bg-gradient-to-t from-[#14110F]/60 to-transparent'></div>
                        <span class='absolute bottom-3 left-4 display text-2xl text-[#FAF6EF]'>{{ $plan['price'] }} €</span>
                        <span class='absolute right-3 top-3 rounded-full bg-[#FAF6EF]/90 px-3 py-1 text-[11px]'>{{ $plan['pax'] }} personas</span>
                    </div>
                    <div class='p-5'>
                        <p class='display text-lg tracking-tight'>{{ $plan['name'] }}</p>
                        <p class='mt-1.5 text-[13px] leading-relaxed text-[#14110F]/55'>{{ $plan['tagline'] }}</p>
                        <div class='mt-4 flex flex-wrap gap-1.5'>
                            @foreach ($plan['chain'] as $c)
                                <span class='rounded-full bg-[#FAF6EF] px-2.5 py-1 text-[11px] text-[#14110F]/65'>{{ $c }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        @php($full = collect($plans)->firstWhere('slug', 'plan-full'))
        <div class='mt-8 overflow-hidden rounded-[2rem] border border-[#14110F]/10 bg-[#14110F] text-[#FAF6EF]'>
            <div class='grid lg:grid-cols-2'>
                <div class='relative min-h-[240px]'>
                    <img src='{{ $full['image'] }}' alt='Villa Müller' class='absolute inset-0 size-full object-cover'>
                </div>
                <div class='p-8 sm:p-10'>
                    <p class='text-[11px] uppercase tracking-[0.22em] text-[#C1892F]'>Plan Full</p>
                    <h2 class='display mt-3 text-3xl tracking-tight'>{{ $full['name'] }}</h2>
                    <p class='mt-3 text-sm text-[#FAF6EF]/65'>{{ $full['tagline'] }}</p>
                    <div class='mt-6 flex flex-wrap items-center gap-4'>
                        <span class='display text-3xl'>{{ number_format($full['price'], 0, ',', '.') }} €</span>
                        <a href='/plans/plan-full' class='rounded-full bg-[#C1892F] px-6 py-3 text-sm font-medium text-[#14110F] transition hover:bg-[#D9A34A]'>Ver los 5 días</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-site>
