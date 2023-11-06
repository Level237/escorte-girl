@extends('layouts.Frontend.escort.profile.master')

@section('content')
<div class="p-5 w-100">

    <div class="mx-4 p-4">
        <div class="flex items-center">
            <div class="flex items-center text-teal-600 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark ">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Personal</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-white relative">
                <div class=" text-teal-600 border-teal-600 rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus ">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600 text-gray-500">Account</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-teal-500 relative">

                <div class=" rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail ">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-500">Message</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-teal-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database ">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-500">Terminé</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 mx-10">



        <div style="padding-bottom: 20px;" class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                <img  class="w-20 m-auto" src="{{ asset('assets/images/bombe-de-table.png') }}">

            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Félicitation votre profil a bien été creer</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Vous pouvez maintenant accedez à vos informations personnels et commencez à publier une annonce pour attirer vos clients.</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">

                    <div class="text-left">
                        <div class="mb-1 text-xs">Consulter</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Votre profil</div>
                    </div>
                </a>
                <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">

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
