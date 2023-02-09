<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div>
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="grid grid-cols-12 gap-6">
        <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Request Funds</h2>
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
                    <form class="w-full max-w-lg" wire:submit.prevent="add_funds">
                        <tbody class="text-sm divide-y divide-gray-100">
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Name
                                    </label>
                                    <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Description
                                    </label>
                                    <textarea wire:model="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Email
                                    </label>
                                    <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Upload These Information As A One Ducument
                                    </label>
                                    <p>
                                        Medical Proof<br>
                                        Nic Front And Back<br>
                                        Living Proof - Water And Current Bill<br>
                                        Phostos Of Patient<br>
                                    </p>
                                </div>
                            </td>


                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">NIC
                                    </label>
                                    <input wire:model="nic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="NIC">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Documents
                                    </label>
                                    <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Age
                                    </label>
                                    <input wire:model="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Age">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Contact
                                    </label>
                                    <input wire:model="contact" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Contact">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Amount
                                    </label>
                                    <input wire:model="amount" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="amount">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
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
        </div>
        </div>

    </div>

</div>
