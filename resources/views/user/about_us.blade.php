<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">


            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">


            </div>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full  shadow-lg rounded-sm border border-gray-200">
                <div class="grid grid-cols-12 gap-6">
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <div class="px-5 pt-5">
                            <header class="flex justify-between items-start mb-2">
                                <!-- Icon -->
                                <!--img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" /-->
                                <!-- Menu button -->
                                <!--div-- class="relative inline-flex" x-data="{ open: false }">
                                    <button
                                        class="text-slate-400 hover:text-slate-500 rounded-full"
                                        :class="{ 'bg-slate-100 text-slate-500': open }"
                                        aria-haspopup="true"
                                        @click.prevent="open = !open"
                                        :aria-expanded="open"
                                    >
                                        <span class="sr-only">Menu</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2" />
                                            <circle cx="10" cy="16" r="2" />
                                            <circle cx="22" cy="16" r="2" />
                                        </svg>
                                    </button>
                                    <div
                                        class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                        @click.outside="open = false"
                                        @keydown.escape.window="open = false"
                                        x-show="open"
                                        x-transition:enter="transition ease-out duration-200 transform"
                                        x-transition:enter-start="opacity-0 -translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-out duration-200"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak
                                    >
                                        <ul>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div-->
                            </header>
                            <h2 class="text-lg font-semibold text-slate-800 mb-2">About Us</h2>
                            <!--div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div-->
                            <div class="flex items-start">
                                <!--div class="text-3xl font-bold text-slate-800 mr-2">${{ number_format($dataFeed->sumDataSet(1, 1), 0) }}</div>
                                <div class="text-sm font-semibold text-white px-1.5 bg-emerald-500 rounded-full">+49%</div-->
                            </div>
                            <p>{{$Data->about_us}}</p>
                        </div>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/dashboard-card-01.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <!--canvas id="dashboard-card-01" width="389" height="128"></canvas-->
                        </div>
                    </div>
                    <!--ddsssdsfssdsd-->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <div class="px-5 pt-5">
                            <header class="flex justify-between items-start mb-2">
                                <!-- Icon -->
                                <!--img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" /-->
                                <!-- Menu button -->
                                <!--div-- class="relative inline-flex" x-data="{ open: false }">
                                    <button
                                        class="text-slate-400 hover:text-slate-500 rounded-full"
                                        :class="{ 'bg-slate-100 text-slate-500': open }"
                                        aria-haspopup="true"
                                        @click.prevent="open = !open"
                                        :aria-expanded="open"
                                    >
                                        <span class="sr-only">Vision</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2" />
                                            <circle cx="10" cy="16" r="2" />
                                            <circle cx="22" cy="16" r="2" />
                                        </svg>
                                    </button>
                                    <div
                                        class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                        @click.outside="open = false"
                                        @keydown.escape.window="open = false"
                                        x-show="open"
                                        x-transition:enter="transition ease-out duration-200 transform"
                                        x-transition:enter-start="opacity-0 -translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-out duration-200"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak
                                    >
                                        <ul>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div-->
                            </header>
                            <h2 class="text-lg font-semibold text-slate-800 mb-2">Vision</h2>

                        </div>
                        <p>{{$Data->vision}}</p>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/dashboard-card-01.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <!--canvas id="dashboard-card-01" width="389" height="128"></canvas-->
                        </div>
                    </div>

            </div>
                <!-- break-->
                <div class="grid grid-cols-12 gap-6">
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <div class="px-5 pt-5">
                            <header class="flex justify-between items-start mb-2">
                                <!-- Icon -->
                            <!--img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" /-->
                                <!-- Menu button -->
                                <!--div-- class="relative inline-flex" x-data="{ open: false }">
                                    <button
                                        class="text-slate-400 hover:text-slate-500 rounded-full"
                                        :class="{ 'bg-slate-100 text-slate-500': open }"
                                        aria-haspopup="true"
                                        @click.prevent="open = !open"
                                        :aria-expanded="open"
                                    >
                                        <span class="sr-only">Menu</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2" />
                                            <circle cx="10" cy="16" r="2" />
                                            <circle cx="22" cy="16" r="2" />
                                        </svg>
                                    </button>
                                    <div
                                        class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                        @click.outside="open = false"
                                        @keydown.escape.window="open = false"
                                        x-show="open"
                                        x-transition:enter="transition ease-out duration-200 transform"
                                        x-transition:enter-start="opacity-0 -translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-out duration-200"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak
                                    >
                                        <ul>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div-->
                            </header>
                            <!--h2 class="text-lg font-semibold text-slate-800 mb-2">About Us</h2-->
                            <img src="{{asset($imageurl)}}" width="200" height="200" />
                        <!--div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div>
                            <div class="flex items-start">
                                <div class="text-3xl font-bold text-slate-800 mr-2">${{ number_format($dataFeed->sumDataSet(1, 1), 0) }}</div>
                                <div class="text-sm font-semibold text-white px-1.5 bg-emerald-500 rounded-full">+49%</div>
                            </div-->
                        </div>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/dashboard-card-01.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <!--canvas id="dashboard-card-01" width="389" height="128"></canvas-->
                        </div>
                    </div>
                    <!--ddsssdsfssdsd-->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <div class="px-5 pt-5">
                            <header class="flex justify-between items-start mb-2">
                                <!-- Icon -->
                            <!--img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" /-->
                                <!-- Menu button -->
                                <!--div class="relative inline-flex" x-data="{ open: false }">
                                    <button
                                        class="text-slate-400 hover:text-slate-500 rounded-full"
                                        :class="{ 'bg-slate-100 text-slate-500': open }"
                                        aria-haspopup="true"
                                        @click.prevent="open = !open"
                                        :aria-expanded="open"
                                    >
                                        <span class="sr-only">Our Achievments</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2" />
                                            <circle cx="10" cy="16" r="2" />
                                            <circle cx="22" cy="16" r="2" />
                                        </svg>
                                    </button>
                                    <div
                                        class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                        @click.outside="open = false"
                                        @keydown.escape.window="open = false"
                                        x-show="open"
                                        x-transition:enter="transition ease-out duration-200 transform"
                                        x-transition:enter-start="opacity-0 -translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-out duration-200"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak
                                    >
                                        <ul>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-slate-600 hover:text-slate-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                            </li>
                                            <li>
                                                <a class="font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div-->
                            </header>
                            <h2 class="text-lg font-semibold text-slate-800 mb-2">Our Achievemnets</h2>
                            <p>{{$Data->our_achievmnets}}</p>

                        </div>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/dashboard-card-01.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <!--canvas id="dashboard-card-01" width="389" height="128"></canvas-->
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</x-app-layout>
