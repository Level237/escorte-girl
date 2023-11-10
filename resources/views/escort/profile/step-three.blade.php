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
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <p class="flex justify-center">4</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirmation</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 mx-10">

        <form method="POST" action="{{ route('step-three-store') }}" enctype="multipart/form-data">
            @csrf
            <div>

                <div class="flex flex-col md:flex-row mb-6">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">

                        <label class="block mb-2 text-sm font-medium text-gray-900 text-white" for="large_size">Telecharger votre profil</label>
                        <input  type="file" name="photo" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 text-gray-400 focus:outline-none bg-gray-700 border-gray-600 placeholder-gray-400" id="large_size">
                        <div class="mt-1 text-sm text-gray-500 text-gray-300" id="user_avatar_help">mettez un profil tres exitant de vous pour avoir plus de contacts des clients.</div>
                        @error('photo')
                            <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                        @enderror
                    </div>



                </div>
                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 text-white">Decrivez vous en quelque ligne.</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>

                        </div>
                        @error('description')
                        <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>



                </div>
                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="height" class="block mb-2 text-sm font-medium text-gray-900 text-white">Selectionnez un ou plusieurs Services</label>

                        <select id="height" name="services[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">

                            @foreach ($listServices as $service)
                            @foreach ($service as $s)
                            <option value="{{ $s->id }}">{{ $s->service_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('services[]')
                        <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>



                </div>




            </div>
            <div class="flex  mt-6 mx-4">
                <fieldset>
                    <legend class="sr-only">Checkbox variants</legend>

                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600" >
                        <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline text-blue-500">terms and conditions</a>.</label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 text-gray-300">Je Sousigne avoir +18 ans </label>
                    </div>
                </fieldset>

            </div>
            <div class="flex-auto flex flex-row-reverse">
                <button type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none  px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-600
        bg-teal-600
        text-teal-100
        border duration-200 ease-in-out
        border-teal-600 transition">Sauvegardez</button>

            </div>
        </form>



    </div>
</div>
@endsection
