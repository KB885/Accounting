<x-guest-layout>
    <div class="container mx-auto max-w-lg">
        <div class="py-24 px-8">
            <div class="bg-white rounded px-8 py-5 shadow-md border border-gray-200">
                <form action="{{ route('auth.register') }}" method="post">
                    @csrf
                    <div class="flex flex-col">
                        <h1 class="text-xl mb-4">Konto registering</h1>

                        <label type="text" class="text-gray-800 text-sm mb-2" for="">Navn</label>
                        <input
                            name="name" class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                            type="text">

                        <label type="email" class="text-gray-800 text-sm mb-2 pt-5" for="">E-mail</label>
                        <input
                           name="email" class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                            type="text">


                        <label class="text-gray-800 text-sm mb-2 pt-5" for="">Kodeord</label>
                        <input
                            name="password" class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                            type="password">

                        <label class="text-gray-800 text-sm mb-2 pt-5" for="">Gentag kodeord</label>
                        <input
                            name="password_confirmation" class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                            type="password">

                        <div class="pt-4 flex">
                            <button
                                class="bg-indigo-500 hover:bg-indigo-600 flex items-center text-white text-sm px-10 py-2 rounded-md focus:outline-none">Opret konto</button>
                        </div>
                        <a href="{{ route('auth.login') }}" class="text-indigo-500 text-sm pt-4">Gå til login</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
