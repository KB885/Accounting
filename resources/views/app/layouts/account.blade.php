<x-app-layout>
    <div id="app" x-data="{ sidemenu: false }" class="md:flex antialiased"  x-cloak @keydown.window.escape="sidemenu = false">

        {{-- Small sidebar --}}
        <aside>
            @include('app.layouts.components.small-sidebar')
        </aside>

        {{-- Content --}}
        <main class="bg-gray-100 h-screen w-full overflow-y-auto">
            @include('app.layouts.components.header')

            @yield('content')
        </main>

    </div>
</x-app-layout>
