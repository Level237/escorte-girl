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
            <div class="flex items-center text-gray-500 relative">

                <div class=" rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <p class="flex justify-center">3</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Profil Escorte</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <p class="flex justify-center">4</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirmation</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 mx-10">

        <form method="POST" action="{{ route('step-two-store') }}">
            @csrf
            <div>

                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quel est votre sexualité</label>
                        <select id="countries" name="sexuality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selectionnez votre Sexualité</option>
                            <option value="Bixesuel">Bixesuel</option>
                        <option value="Lesbienne">Lesbienne</option>
                        </select>
                        @error('sexuality')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">
                            <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quel est le nom de votre quartier?</label>
                        <select id="countries" name="quarter_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selectionnez votre quartier</option>
                            @foreach ($listQuarter as $quarter)
                            @foreach ($quarter as $q)
                            <option value="{{ $q->id }}">{{ $q->quarter_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('quarter_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                        </div>

                    </div>


                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quel est votre taille?</label>
                        <select id="height" name="height_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selectionnez votre taille</option>
                            @foreach ($listHeight as $height)
                            @foreach ($height as $h)
                            <option value="{{ $h->id }}">{{ $h->height_name }}</option>
                            @endforeach
                            @endforeach
                        </select>
                        @error('height_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectionnez votre poids?</label>
                        <select id="weight" name="weight_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selectionnez votre poids</option>
                            @foreach ($listWeight as $Weight)
                            @foreach ($Weight as $w)
                            <option value="{{ $w->id }}">{{ $w->weight_name }}</option>
                            @endforeach
                            @endforeach
                        </select>
                        @error('weight_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                <div class="flex flex-col md:flex-row mt-6">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectionnez votre corpulence?</label>
                        <select id="shape" name="shape_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selectionnez votre corpulence</option>
                            @foreach ($listShape as $shape)
                            @foreach ($shape as $s)
                            <option value="{{ $s->id }}">{{ $s->shape_name }}</option>
                            @endforeach
                            @endforeach
                        </select>
                        @error('shape_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">

                        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entrez votre numero Whatsapp</label>
                        <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                           <svg fill="#18af52" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve" stroke="#18af52"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_468_"> <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z"></path> <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z"></path> </g> </g></svg>
                        </span>
                        <input type="number"  name="whatsapp_number" id="whatsapp_number" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="690394365">
                        </div>
                        @error('whatsapp_number')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="flex p-2 mt-4">

                <div class="flex-auto flex flex-row-reverse">
                    <button type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
            hover:bg-teal-600
            bg-teal-600
            text-teal-100
            border duration-200 ease-in-out
            border-teal-600 transition">Suivant</button>
                </div>
        </form>


        </div>
    </div>
</div>
@endsection
