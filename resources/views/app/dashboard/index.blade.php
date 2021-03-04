@extends('app.layouts.default')
@section('content')
<section class="px-14">
    <div class="bg-blue-200 px-4 py-2 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-full ">
        <span class="text-blue-800 text-sm">Du anvender den gratis version. Hvad med at opgradere? Læs mere <a href="#" class="font-semibold">her</a> </span>
    </div>
</section>
<section>
    <div class="px-8 overflow-hidden rounded-t sm:rounded-lg">
        <div class=" sm:px-2">
            <div class="p-4 flex justify-between items-center">
                <h3 class="text-xl leading-5 text-gray-600">
                    Overview
                </h3>
            </div>
            <section class="flex flex-row flex-wrap items-center">
                <div class="p-4 w-full sm:w-1/2 lg:w-1/4">
                    <div class="p-6 bg-white sm:rounded py-5 shadow">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col space-y-2">
                                <p class="text-sm text-gray-600">Indtægter</p>
                                <h3 class="text-2xl font-semibold leading-5 text-gray-600">
                                    5200,00 kr.
                                </h3>

                            </div>
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full sm:w-1/2 lg:w-1/4">
                    <div class="p-6 bg-white sm:rounded py-5 shadow">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col space-y-2">
                                <p class="text-sm text-gray-600">Udgifter</p>
                                <h3 class="text-2xl font-semibold leading-5 text-gray-600">
                                    4120,00 kr.
                                </h3>

                            </div>
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full sm:w-1/2 lg:w-1/4">
                    <div class="p-6 bg-white sm:rounded py-5 shadow">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col space-y-2">
                                <p class="text-sm text-gray-600">Resultat</p>
                                <h3 class="text-2xl font-semibold leading-5 text-gray-600">
                                    1080,00 kr.
                                </h3>

                            </div>
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full sm:w-1/2 lg:w-1/4">
                    <div class="p-6 bg-white sm:rounded py-5 shadow">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col space-y-2">
                                <p class="text-sm text-gray-600">Nøgle tal</p>
                                <h3 class="text-2xl font-semibold leading-5 text-gray-600">
                                    5
                                </h3>

                            </div>
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="">
    <div class=" px-8 overflow-hidden rounded-t sm:rounded-lg">
        <div class="p-6 sm:px-2">
            <div class="p-4 flex">
                <h3 class="text-xl leading-5 text-gray-600">
                    Bank konto
                </h3>
            </div>
            <section class="p-4 flex flex-row flex-wrap items-center">
                <div class="flex flex-col">
                    <div class="bg-white shadow-md border border-gray-200 px-5 py-5 rounded">
                        <h2 class="font-semibold">Få vist din banksaldo her</h2>
                        <p class="text-sm">Du kan se om din konto opfylder kriterierne til at få vist din konto her.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

@endsection
