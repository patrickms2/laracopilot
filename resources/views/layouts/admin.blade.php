<!DOCTYPE html>
<html lang='es' class='bg-white'>
<head>@include('partials.head')</head>
<body class='min-h-screen bg-[#FAF9F6] text-zinc-800 antialiased'>

<flux:sidebar sticky collapsible='mobile' class='border-e border-zinc-200 bg-white'>
    <flux:sidebar.toggle class='lg:hidden' icon='x-mark' inset='left' />

    <a href='/admin/dashboard' class='flex items-center gap-2.5 px-2 py-4'>
        <span class='flex size-8 items-center justify-center rounded-full bg-[#14110F]'>
            <span class='size-2.5 rounded-full bg-[#C1892F]'></span>
        </span>
        <span class='text-base font-semibold tracking-tight text-zinc-900'>Malpaís</span>
    </a>

    <flux:navlist variant='outline'>
        <flux:sidebar.item icon='home' href='/admin/dashboard'>Dashboard</flux:sidebar.item>
        <flux:sidebar.item icon='clipboard-document-list' href='/admin/bookings'>Reservas</flux:sidebar.item>
        <flux:sidebar.item icon='truck' href='/admin/taxis'>Taxis</flux:sidebar.item>
        <flux:sidebar.item icon='map' href='/admin/tours'>Tours y bodegas</flux:sidebar.item>
        <flux:sidebar.item icon='building-storefront' href='/admin/restaurants'>Restaurantes</flux:sidebar.item>
        <flux:sidebar.item icon='shopping-bag' href='/admin/products'>Productos</flux:sidebar.item>
        <flux:sidebar.item icon='cpu-chip' href='/admin/agents'>Agentes MCP</flux:sidebar.item>
        <flux:sidebar.item icon='users' href='/admin/users'>Usuarios</flux:sidebar.item>
    </flux:navlist>

    <flux:spacer />

    <div class='px-2 pb-4'>
        <div class='mb-3 rounded-xl border border-zinc-200 bg-[#FAF6EF] p-3'>
            <p class='flex items-center gap-2 text-xs font-medium text-zinc-700'>
                <span class='size-2 animate-pulse rounded-full bg-emerald-500'></span> Orquestador activo
            </p>
            <p class='mt-1 text-[11px] text-zinc-500'>6 agentes conectados · websockets en vivo</p>
        </div>
        <a href='/' class='mb-2 block rounded-lg px-3 py-2 text-sm text-zinc-600 hover:bg-zinc-100'>Ver sitio público</a>
        <form method='POST' action='/admin/logout'>
            @csrf
            <button type='submit' class='w-full rounded-lg px-3 py-2 text-left text-sm text-zinc-600 hover:bg-zinc-100'>Log out</button>
        </form>
    </div>
</flux:sidebar>

<flux:header class='lg:hidden'>
    <flux:sidebar.toggle class='lg:hidden' icon='bars-2' inset='left' />
    <flux:spacer />
    <span class='text-sm font-medium text-zinc-700'>{{ $title ?? 'Panel' }}</span>
</flux:header>

<flux:main>
    <div class='mx-auto w-full max-w-7xl'>
        <div class='mb-6 flex flex-wrap items-end justify-between gap-3'>
            <div>
                <p class='text-[11px] uppercase tracking-[0.18em] text-[#C1892F]'>Malpaís Ops</p>
                <flux:heading size='xl' class='mt-1'>{{ $title ?? 'Panel' }}</flux:heading>
            </div>
            <div class='flex items-center gap-2 text-xs text-zinc-500'>
                <span class='size-2 animate-pulse rounded-full bg-emerald-500'></span> Sincronizado hace 3 s
            </div>
        </div>

        {{ $slot }}
    </div>
</flux:main>

@fluxScripts
</body>
</html>
