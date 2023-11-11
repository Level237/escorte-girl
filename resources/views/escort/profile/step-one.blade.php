@extends('layouts.Frontend.escort.profile.master')

@section('content')
<div class="p-5 w-100">

    <div class="mx-4 p-4">
        <div class="flex items-center">
            <div class="flex items-center text-teal-600 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">

                        <p class="flex justify-center">1</p>

                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Informations personnels</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600"></div>
            <div class="flex items-center text-white relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 ">
                    <p class="flex justify-center">2</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Corpulence</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
            <div class="flex items-center text-gray-500 relative">

                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
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

        <form method="POST" action="{{ route('step-one-store') }}">
            @csrf
            <div>

                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 text-white">Username escort *</label>
                            <input name="escort_name"  type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('escort_name')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 text-white">Email</label>
                            <input name="email"  type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                        </div>

                    </div>


                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 text-white">Quel age aviez vous? *</label>
                        <select id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Selectionnez un age</option>
                            <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="+36">+36</option>
                        </select>
                        @error('age')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="ethnic" class="block mb-2 text-sm font-medium text-gray-900 text-white">De Quel Ethie etes vous? *</label>
                        <select id="ethnic" name="ethnic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($listEthnic as $ethnic)
                        <option value="">Selectionnez une ethnie</option>
                            @foreach ($ethnic as $e)
                            <option value="{{ $e->id }}">{{ $e->ethnic_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('ethnic_id')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col md:flex-row mt-3">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 text-white">Vous etes? *</label>
                        <select id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Selectionnez votre sexe</option>
                        <option value="1">Homme</option>
                        <option value="0">Femme</option>
                        </select>
                        @error('genre')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                            @enderror
                    </div>

                </div>
                <div class="flex flex-col md:flex-row mt-6">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="skin_color" class="block mb-2 text-sm font-medium text-gray-900 text-white">Quel est votre couleur de peau? *</label>
                        <select id="skinColor" name="skin_color_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Selectionnez une couleur de peau</option>
                            @foreach ($listSkinColor as $skinColor)
                            @foreach ($skinColor as $s)
                            <option value="{{ $s->id }}">{{ $s->skin_color_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('skin_color_id')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 text-white">De Quel Ville etes vous? *</label>
                        <select id="countries" name="town_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Selectionnez une ville</option>
                            @foreach ($listTown as $town)
                            @foreach ($town as $t)
                            <option value="{{ $t->id }}">{{ $t->town_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('town_id')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
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
        </form>


        </div>
    </div>
</div>
@endsection
