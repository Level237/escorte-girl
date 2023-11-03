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
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600"></div>
            <div class="flex items-center text-white relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus ">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Account</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
            <div class="flex items-center text-gray-500 relative">

                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail ">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Message</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database ">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirm</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 mx-10">

        <form method="GET">

            <div>

                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username escort *</label>
                            <input name="escort_name"  type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input name="email"  type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                    </div>


                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quel age aviez vous?</label>
                        <select id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        </select>
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="ethnic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">De Quel Ethie etes vous?</label>
                        <select id="ethnic" name="ethnic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Douala</option>
                        <option>Bamiliké</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row mt-6">
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="skin_color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quel est votre couleur de peau?</label>
                        <select id="skinColor" name="skin_color_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Brune</option>
                        <option>Noire</option>
                        <option>Metis</option>
                        <option>Blanche</option>
                        </select>
                    </div>
                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">De Quel Ville etes vous?</label>
                        <select id="countries" name="town_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Douala</option>
                        <option>Yaoundé</option>
                        </select>
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
            border-teal-600 transition">Next</button>
                    <button class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
            hover:bg-teal-200
            bg-teal-100
            text-teal-700
            border duration-200 ease-in-out
            border-teal-600 transition">Skip</button>
                </div>
        </form>


        </div>
    </div>
</div>
@endsection
