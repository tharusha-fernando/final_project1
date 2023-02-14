<div>
    {{-- Do your work, then step back. --}}
    <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
    <table class="table-auto w-full">
        <!-- Table header -->
        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
        <tr>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-left">Name</div>
            </th>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-left">Email</div>
            </th>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-left">Amount</div>
            </th>
            <!--th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-center">Age</div>
            </th>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-center">NIC</div>
            </th-->
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-center">Description</div>
            </th>
            <th class="p-2 whitespace-nowrap">
                <div class="font-semibold text-center">Operations</div>
            </th>

        </tr>
        </thead>
        <!-- Table body -->
        <tbody class="text-sm divide-y divide-gray-100">
        @foreach($Funds as $Fund)
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="flex items-center">
                    <!--div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
                                </div-->
                        <div class="font-medium text-gray-800">{{$Fund->name}}</div>
                    </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                    @livewire('admin.progressbar', ['Percentage' => $Collection->get($Fund->id)])

                </td>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left font-medium text-green-500">${{$Fund->amount}}</div>
                </td>
                <!--td class="p-2 whitespace-nowrap">
                    <div class="text-left">{{$Fund->age}}</div>
                </td>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left">{{$Fund->nic}}</div>
                </td-->
                <td class="p-2 whitespace-nowrap">
                    <!-- component -->
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


                    <div class="m-10">
                        <!-- Modal -->
                        <div x-data="{ showModal : false }">
                            <!-- Button -->
                            <button @click="showModal = !showModal" class="px-4 py-2 text-white bg-emerald-500 rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold focus:bg-indigo-50 focus:text-indigo">View Description</button>

                            <!-- Modal Background -->
                            <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <!-- Modal -->
                                <div x-show="showModal" class="bg-gray-200 rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                    <!-- Title -->
                                    <p>
                                        {{$Fund->description}}
                                    </p>
                                    <button wire:click="download({{$Fund->id}},'medical')"  class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
                                        Download Medical Proof
                                    </button>
                                    <!--button wire:click="download({{$Fund->id}},'nic')"  class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
                                        Download Nic
                                    </button>
                                    <button wire:click="download({{$Fund->id}},'liveing')"  class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
                                        Download Living Proof
                                    </button>
                                    <button wire:click="download({{$Fund->id}},'photos')"  class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
                                        Download Photos
                                    </button-->
                                    <!-- Buttons -->
                                    <div class="text-right space-x-5 mt-5">
                                        <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                        <!--a href="https://www.buymeacoffee.com/fricki" target="_blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">? Buy me a beer!</a-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-10 pb-10 border-b border-gray-200"></div>

                    </div>
                </td>
                <td>
                    <button wire:click="approve({{$Fund->id}})" class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Donate
                    </button>
                    <br>
                    <!--button wire:click="download({{$Fund->id}})" class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
                        Download Documents
                    </button-->
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    </div>

</div>
