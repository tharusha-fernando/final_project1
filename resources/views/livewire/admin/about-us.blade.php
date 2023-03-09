<div>
    {{-- The whole world belongs to you. --}}
    <header class="px-5 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Suwasetha Donations</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <x-jet-validation-errors class="mb-3 alert-danger mx-4">
                </x-jet-validation-errors>
                @if (session()->has('message_pwValidation'))
                    <div class="relative w-full p-4 text-red-600 bg-red-100 rounded-lg">{{ session('message_pwValidation') }}</div>
                @endif
                @if (session()->has('message_customer'))
                    <div class="relative w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">{{ session('message_customer') }}</div>
            @endif

            <!-- Table body -->
                <form class="w-full max-w-lg" wire:submit.prevent="update_data">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    About Us
                                </label>
                                <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <!-- Icon -->
                            <img src="{{asset($imageurl)}}" width="200" height="200" />
                            <!-- Menu button -->

                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Vision
                                </label>
                                <input wire:model="vision" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Vision">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Update Image
                                </label>
                                <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Our Achievments
                                </label>
                                <input wire:model="our_achivemnetns" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Our Achievments">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <!--td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Update Image
                                </label>
                                <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                            </div>
                        </td-->
                    </tr>
                    <tr>
                        <td>
                            <button class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                                Submit
                            </button>
                            <button class="bg-gray-500 hover:bg-gray-50 text-white font-bold py-2 px-4 rounded-full" type="reset">
                                Cancel
                            </button>
                        </td>
                        <!--td>

                        </td>
                        <td>

                        </td-->
                    </tr>


                    </tbody>
                </form>
            </table>

        </div>

    </div>
</div>
