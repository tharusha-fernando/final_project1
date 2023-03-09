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
                                    <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Description
                                    </label>
                                    <textarea wire:model="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Email
                                    </label>
                                    <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Type
                                    </label>
                                    <div class="relative">
                                        <select wire:model="type" class="block appearance-none block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="Operation">Operation</option>
                                            <option value="Medical_Equipment">Medical Equipment</option>
                                            <option value="Medicine">Medicine</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293l-3. 087 3. 087L20. 707 9. 293z"/></svg>
                                        </div>
                                    </div>
                                </div>


                            </td>


                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">NIC
                                    </label>
                                    <input wire:model="nic" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="NIC">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Medical Proof
                                    </label>
                                    <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Age
                                    </label>
                                    <input wire:model="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Age">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        NIC FRONT AND BACK
                                    </label>
                                    <input wire:model="doc_uploadnic" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Contact
                                    </label>
                                    <input wire:model="contact" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Contact">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Living Proof
                                    </label>
                                    <input wire:model="doc_uploadlifing" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Amount
                                    </label>
                                    <input wire:model="amount" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="amount">
                                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Photos Of Patient
                                    </label>
                                    <input wire:model="doc_uploadphotos" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

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
