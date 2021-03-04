@extends('app.layouts.account')
@section('content')
<div class="container mx-auto max-w-lg">
    <div class="py-24 px-8">
        <div class="bg-white rounded px-8 py-5 shadow-md border border-gray-200">
            <form action="{{ route('company.store') }}" method="post">
                @csrf
                <div class="flex flex-col">
                    <h1 class="text-xl mb-4">Firma oprettelse</h1>


                    <label type="text" class="text-gray-800 text-sm mb-2" for="">Firma navn <span
                            class="text-red-700">*</span></label>
                    <input name="name"
                        class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                        type="text">



                    <label type="text" class="text-gray-800 text-sm mb-2 pt-4" for="">Adresse</label>
                    <input name="street"
                        class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                        type="text">



                    <div class="flex items-center justify-center gap-2   pt-4">
                        <div class="flex flex-col">
                            <label type="text" class="text-gray-800 text-sm mb-2" for="">Postnr.</label>
                            <input name="zipCode"
                                class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                                type="text">

                        </div>
                        <div class="flex flex-col">
                            <label type="text" class="text-gray-800 text-sm mb-2" for="">By</label>
                            <input name="city"
                                class="rounded border border-gray-200 text-gray-800 bg-gray-50 focus:outline-none px-2 py-1"
                                type="text">
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-800 text-sm mb-2 pt-5" for="">Land <span
                            class="text-red-700">*</span></label>
                        <select name="country"
                            class="border border-gray-200 rounded text-gray-800 text-sm px-2 py-1 bg-gray-100 focus:outline-none">
                            @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="pt-4 flex">
                        <button
                            class="bg-indigo-500 hover:bg-indigo-600 flex items-center text-white text-sm px-10 py-2 rounded-md focus:outline-none">Opret
                            firma</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
