@extends('layouts.Frontend.escort.profile.master')

@section('content')
<div class="p-5 w-100">

    <div class="mx-4 p-4">
        <div class="flex items-center">
            <div class="flex items-center text-teal-600 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                    <p class="flex justify-center">1</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Informations personnel</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-white relative">
                <div class=" text-teal-600 border-teal-600 rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 ">
                    <p class="flex justify-center">2</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600 text-gray-500">Corpulence</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-teal-500 relative">

                <div class=" rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-300">
                    <p class="flex justify-center">3</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-500">Profil Escorte</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-teal-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-300">
                    <p class="flex justify-center">4</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-500">Terminé</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 mx-10">



        <div style="padding-bottom: 20px;" class="w-full p-4 text-center  border border-gray-200 rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">

                <img  class="w-20 m-auto" src="{{ asset('assets/images/bombe-de-table.png') }}">

            <h5 class="mb-2 text-3xl font-bold text-gray-900 text-white">Félicitation votre profil a bien été creer</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg text-gray-400">Vous pouvez maintenant accedez à vos informations personnels et commencez à publier une annonce pour attirer vos clients.</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('db.escort.profil') }}" class="w-full sm:w-auto bg-gray-700 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 bg-gray-700 hover:bg-gray-600 focus:ring-gray-700">

                    <div class="text-left">
                        <div class="mb-1 text-xs">Consulter</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Votre profil</div>
                    </div>
                </a>
                <a href="{{ route('db.escort.index') }}" class="w-full sm:w-auto bg-gray-700 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 bg-gray-700 hover:bg-gray-600 focus:ring-gray-700">

                    <div class="text-left">
                        <div class="mb-1 text-xs">Accedez</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">à votre dashboard</div>
                    </div>
                </a>
            </div>
        </div>




    </div>
</div>
@endsection
