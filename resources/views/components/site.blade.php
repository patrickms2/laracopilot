@props(['title' => 'Malpaís · Island Concierge', 'active' => ''])
<!DOCTYPE html>
<html lang='es' class='scroll-smooth'>
<head>
    @include('partials.head')
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@300;400;500;600&display=swap' rel='stylesheet'>
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        .display { font-family: 'Fraunces', Georgia, serif; font-optical-sizing: auto; }
        .no-bar::-webkit-scrollbar { display: none; }
        .no-bar { scrollbar-width: none; }
    </style>
</head>
<body class='min-h-screen bg-[#FAF6EF] text-[#14110F] antialiased pb-20 md:pb-0'>

<header class='sticky top-0 z-40 border-b border-[#14110F]/10 bg-[#FAF6EF]/85 backdrop-blur-md'>
    <div class='mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6'>
        <a href='/' class='flex items-center gap-2.5'>
            <span class='flex size-8 items-center justify-center rounded-full bg-[#14110F]'>
                <span class='size-2.5 rounded-full bg-[#C1892F]'></span>
            </span>
            <span class='display text-lg tracking-tight'>Malpaís</span>
            <span class='hidden text-[11px] uppercase tracking-[0.18em] text-[#14110F]/45 sm:inline'>Island Concierge</span>
        </a>

        <nav class='hidden items-center gap-7 text-sm text-[#14110F]/70 md:flex'>
            <a href='/plans' class='transition hover:text-[#14110F]'>Planes</a>
            <a href='/tours' class='transition hover:text-[#14110F]'>Tours</a>
            <a href='/restaurants' class='transition hover:text-[#14110F]'>Restaurantes</a>
            <a href='/taxi' class='transition hover:text-[#14110F]'>Taxi</a>
            <a href='/shop' class='transition hover:text-[#14110F]'>Tienda</a>
        </nav>

        <div class='flex items-center gap-2'>
            <a href='/admin/login' class='hidden text-xs uppercase tracking-widest text-[#14110F]/40 transition hover:text-[#14110F] sm:inline'>Admin</a>
            <a href='/ai' class='inline-flex items-center gap-1.5 rounded-full bg-[#14110F] px-4 py-2 text-sm font-medium text-[#FAF6EF] transition hover:bg-[#2A231E]'>
                <span class='size-1.5 animate-pulse rounded-full bg-[#C1892F]'></span> Concierge IA
            </a>
        </div>
    </div>
</header>

{{ $slot }}

<footer class='bg-[#14110F] text-[#FAF6EF]'>
    <div class='mx-auto max-w-6xl px-4 py-14 sm:px-6'>
        <div class='grid gap-10 md:grid-cols-4'>
            <div class='md:col-span-2'>
                <p class='display text-2xl tracking-tight'>Malpaís</p>
                <p class='mt-3 max-w-sm text-sm leading-relaxed text-[#FAF6EF]/60'>Concierge integrado de la isla: taxi, bodegas, mesa, tours y productos volcánicos en una sola reserva y un solo pago.</p>
                <div class='mt-5 flex flex-wrap gap-2'>
                    <span class='rounded-full border border-white/15 px-3 py-1 text-xs text-[#FAF6EF]/70'>Lanzarote</span>
                    <span class='rounded-full border border-white/15 px-3 py-1 text-xs text-[#FAF6EF]/70'>Atención 24/7</span>
                    <span class='rounded-full border border-white/15 px-3 py-1 text-xs text-[#FAF6EF]/70'>Pago seguro</span>
                </div>
            </div>
            <div>
                <p class='text-xs uppercase tracking-[0.18em] text-[#C1892F]'>Reservar</p>
                <ul class='mt-4 space-y-2 text-sm text-[#FAF6EF]/65'>
                    <li><a href='/wizard' class='hover:text-[#FAF6EF]'>Reserva guiada</a></li>
                    <li><a href='/plans' class='hover:text-[#FAF6EF]'>Planes por días</a></li>
                    <li><a href='/tours' class='hover:text-[#FAF6EF]'>Tours y bodegas</a></li>
                    <li><a href='/restaurants' class='hover:text-[#FAF6EF]'>Restaurantes</a></li>
                </ul>
            </div>
            <div>
                <p class='text-xs uppercase tracking-[0.18em] text-[#C1892F]'>Isla</p>
                <ul class='mt-4 space-y-2 text-sm text-[#FAF6EF]/65'>
                    <li><a href='/taxi' class='hover:text-[#FAF6EF]'>Taxi al momento</a></li>
                    <li><a href='/shop' class='hover:text-[#FAF6EF]'>Vinos y aloe vera</a></li>
                    <li><a href='/ai' class='hover:text-[#FAF6EF]'>Modo IA</a></li>
                    <li><a href='/admin/login' class='hover:text-[#FAF6EF]'>Acceso partners</a></li>
                </ul>
            </div>
        </div>
        <div class='border-t border-white/10 py-6 text-center text-sm opacity-80 mt-10'>
            <p>© {{ date('Y') }} Malpaís Island Concierge. All rights reserved.</p>
            <p class='mt-2'>Made with ❤️ by <a href='https://laracopilot.com/' target='_blank' class='hover:underline'>LaraCopilot</a></p>
        </div>
    </div>
</footer>

<nav class='fixed inset-x-0 bottom-0 z-40 border-t border-[#14110F]/10 bg-[#FAF6EF]/95 backdrop-blur md:hidden'>
    <div class='grid grid-cols-5 text-[11px]'>
        <a href='/' class='flex flex-col items-center gap-1 py-3 {{ $active === 'home' ? 'text-[#C1892F]' : 'text-[#14110F]/55' }}'>
            <flux:icon.home class='size-5' /> Inicio
        </a>
        <a href='/plans' class='flex flex-col items-center gap-1 py-3 {{ $active === 'plans' ? 'text-[#C1892F]' : 'text-[#14110F]/55' }}'>
            <flux:icon.calendar-days class='size-5' /> Planes
        </a>
        <a href='/ai' class='flex flex-col items-center gap-1 py-3 {{ $active === 'ai' ? 'text-[#C1892F]' : 'text-[#14110F]/55' }}'>
            <flux:icon.sparkles class='size-5' /> IA
        </a>
        <a href='/wizard' class='flex flex-col items-center gap-1 py-3 {{ $active === 'wizard' ? 'text-[#C1892F]' : 'text-[#14110F]/55' }}'>
            <flux:icon.squares-2x2 class='size-5' /> Reservar
        </a>
        <a href='/shop' class='flex flex-col items-center gap-1 py-3 {{ $active === 'shop' ? 'text-[#C1892F]' : 'text-[#14110F]/55' }}'>
            <flux:icon.shopping-bag class='size-5' /> Tienda
        </a>
    </div>
</nav>

@fluxScripts
</body>
</html>
