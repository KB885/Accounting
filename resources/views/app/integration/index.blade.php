@extends('app.layouts.default')
@section('content')
<div class="container mx-auto ">
    <div class="py-5 px-8">
        <div class="bg-white rounded px-8 py-5 shadow-md border border-gray-200">
            <h3 class="text-xl text-gray-800 font-semibold pb-5">API KEY</h3>
            <p class="text-sm leading-6">For at komme igang med at anvende de forskellige integrationer, skal du først
                oprette en API Key. Det gør du ved at følge linket nedenunder. Som vil tage dig til vores API
                dokumentationer.</p>
            <div class="flex pt-4">
                <a href="{{ route('company.create')}}"
                    class="bg-indigo-500 hover:bg-indigo-600 flex items-center text-white text-sm px-10 py-2 rounded-md focus:outline-none transition duration-150 ease-in-out">Opret
                    API key</a>
            </div>
        </div>
    </div>
    <div class="py-5 px-8">
        <h3 class="text-xl text-gray-800 font-semibold pb-5">Populære integrationer</h3>
        <div class="flex space-x-6">
            <div class="w-1/3">
                <div class="bg-white rounded-t px-8 py-5 shadow-md border border-gray-200">
                    <div class="flex flex-col">
                        <h2 class="text-center justify-center font-bold">Mobilepay Invoice</h2>
                        <img class="w-full h-24 object-center object-scale-down justify-center text-center" src="https://www.mobilepay.dk/mobilepaymedia/mobilepay-global/material-bank-global/preview-pictures-global/logo-preview/preview-mp-logo-and-type-horizontal-blue.png?filelibraryid=6BBD28FFC307414AAF4647DAB9609703&mediaid=22C1646C92FB4FE7B35211524E91BA35&mw=1000&hash=AEBB66DDA343A8E278F787D307582479BE09DF3C"
                            alt="">
                        <p class="font-bold text-sm pt-5">Få dine penge på gennemsnitligt 1.3 dag.</p>
                        <p class="text-sm leading-6 pt-2">Med Mobilepay Invoice kan dine kunder betale endnu nemmere -
                            og beløbet bogføres
                            automatisk.</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-b">
                    <div class="flex justify-between px-8 py-5">
                        <span class="bg-indigo-500 text-sm px-6 py-1 text-white rounded">Banking Pro</span>
                        <a href="#" class="text-indigo-500">Installér</a>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-16">
                <div class="bg-white rounded px-8 py-5 shadow-md border border-gray-200">
                    <div class="flex flex-col">
                        <h2 class="text-center justify-center font-bold">Dropbox</h2>
                        <img class="w-full h-24 object-center object-scale-down  justify-center text-center" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Dropbox_logo_2017.svg/1280px-Dropbox_logo_2017.svg.png"
                            alt="">
                        <p class="font-bold text-sm pt-5">Automatisering</p>
                        <p class="text-sm leading-6 pt-2">Lav automatisk backup af dine Banking-filer direkte i din dropbox. Nemt og sikkert på mange måder.</p>
                    </div>
                </div>
                <div class="bg-gray-200">
                    <div class="flex justify-between px-8 py-5">
                        <span class="bg-indigo-500 text-sm px-6 py-1 text-white rounded">Banking Pro</span>
                        <a href="#" class="text-indigo-500">Installér</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
