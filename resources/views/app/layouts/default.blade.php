<x-app-layout>
    <div id="app" x-data="{ sidemenu: false }" class="md:flex antialiased"  x-cloak @keydown.window.escape="sidemenu = false">

        {{-- Small sidebar --}}
        <aside>
            @include('app.layouts.components.small-sidebar')
        </aside>

        {{-- Sidebar --}}
        <aside class="w-full md:h-screen md:w-64 bg-dark-1 hidden md:flex md:flex-col">
            @include('app.layouts.components.sidebar')
        </aside>

        {{-- Content --}}
        <main class="bg-gray-100 h-screen w-full overflow-y-auto">
            @include('app.layouts.components.header')

            @yield('content')
        </main>

    </div>
</x-app-layout>
