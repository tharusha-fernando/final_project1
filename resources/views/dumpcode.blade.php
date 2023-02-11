<x-jet-input id="user_type" type="hidden" name="user_type" value="administrator" />
<!-- Line chart (Acme Plus) -->
<x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" />

<!-- Line chart (Acme Advanced) -->
<x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" />

<!-- Line chart (Acme Professional) -->
<x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" />

<!-- Bar chart (Direct vs Indirect) -->
<x-dashboard.dashboard-card-04 />

<!-- Line chart (Real Time Value) -->
<x-dashboard.dashboard-card-05 />

<!-- Doughnut chart (Top Countries) -->
<x-dashboard.dashboard-card-06 />

<!-- Table (Top Channels) -->
<x-dashboard.dashboard-card-07 />

<!-- Line chart (Sales Over Time)  -->
<x-dashboard.dashboard-card-08 />

<!-- Stacked bar chart (Sales VS Refunds) -->
<x-dashboard.dashboard-card-09 />

<!-- Card (Customers)  -->
<x-dashboard.dashboard-card-10 />

<!-- Card (Reasons for Refunds)   -->
<x-dashboard.dashboard-card-11 />

<!-- Card (Recent Activity) -->
<x-dashboard.dashboard-card-12 />

<!-- Card (Income/Expenses) -->
<x-dashboard.dashboard-card-13 />
<!-- Filter button -->
<x-dropdown-filter align="right" />

<!-- Datepicker built with flatpickr -->
<x-datepicker />
<!-- Add view button -->
<button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
    </svg>
    <span class="hidden xs:block ml-2">Add View</span>
</button>
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
        <div class="font-semibold text-left">Spent</div>
    </th>
    <th class="p-2 whitespace-nowrap">
        <div class="font-semibold text-center">Country</div>
    </th>
</tr>
</thead>
<div class="flex items-center">
    <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
        <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
    </div>
    <div class="font-medium text-gray-800">Alex Shatov</div>
</div>
<div class="text-left">alexshatov@gmail.com</div>
<td class="p-2 whitespace-nowrap">
    <div class="text-left font-medium text-green-500">$2,890.66</div>
</td>
<td class="p-2 whitespace-nowrap">
    <div class="text-lg text-center">🇺🇸</div>
</td>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-06.jpg') }}" width="40" height="40" alt="Philip Harbach" />
            </div>
            <div class="font-medium text-gray-800">Philip Harbach</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">philip.h@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$2,767.04</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇩🇪</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-07.jpg') }}" width="40" height="40" alt="Mirko Fisuk" />
            </div>
            <div class="font-medium text-gray-800">Mirko Fisuk</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">mirkofisuk@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$1,220.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇫🇷</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-08.jpg') }}" width="40" height="40" alt="Burak Long" />
            </div>
            <div class="font-medium text-gray-800">Burak Long</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">longburak@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$1,890.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇬🇧</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-09.jpg') }}" width="40" height="40" alt="Alex Shatov" />
            </div>
            <div class="font-medium text-gray-800">Alex Shatov</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">alexshatov@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$2,890.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇺🇸</div>
    </td>
</tr>
<div class="flex items-center">
    <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
        <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
    </div>
    <div class="font-medium text-gray-800">Alex Shatov</div>
</div>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                First Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
            </div>
            <div class="font-medium text-gray-800">Alex Shatov</div>
        </div>
    </td>
</tr>
@if (session()->has('message_customer'))
    <div class="relative w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">{{ session('message_customer') }}</div>

    @if(session('message_customer')=="Password Does Not Match")
        <div class="relative w-full p-4 text-red-600 bg-red-100 rounded-lg">{{ session('message_customer') }}</div>
    @else
    @endif
@endif
<td class="p-2 whitespace-nowrap">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
        </label>
        <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
    </div>
</td>
<td class="p-2 whitespace-nowrap">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Date Of Birth
        </label>
        <input wire:model="date_of_birth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" placeholder="Date Of BNirth">
        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
    </div>
</td>
<td class="p-2 whitespace-nowrap">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Age
        </label>
        <input wire:model="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
    </div>
</td>
<td class="p-2 whitespace-nowrap">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Confirm Password
        </label>
        <input wire:model="password_confirmation" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="password" placeholder="Confirm Password">
        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
    </div>
</td>
<input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
<!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
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
            Email
        </label>
        <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
    </div>
</td>
<input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
<!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Last Name
    </label>
    <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
</div>
<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
    </label>
    <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
</div>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Date Of Birth
            </label>
            <input wire:model="date_of_birth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" placeholder="Date Of BNirth">
            <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">NIC
            </label>
            <input wire:model="nic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="NIC">
            <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
        </div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Password
            </label>
            <input wire:model="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="password" placeholder="Password">
            <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Confirm Password
            </label>
            <input wire:model="password_confirmation" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="password" placeholder="Confirm Password">
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
<div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
    <div class="px-5 pt-5">
        <header class="flex justify-between items-start mb-2">
            <!-- Icon -->
            <img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" />
            <!-- Menu button -->
            <div class="relative inline-flex" x-data="{ open: false }">
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
            </div>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 mb-2">Acme Plus</h2>
        <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 mr-2">${{ number_format($dataFeed->sumDataSet(1, 1), 0) }}</div>
            <div class="text-sm font-semibold text-white px-1.5 bg-emerald-500 rounded-full">+49%</div>
        </div>
    </div>
    <!-- Chart built with Chart.js 3 -->
    <!-- Check out src/js/components/dashboard-card-01.js for config -->
    <div class="grow">
        <!-- Change the height attribute to adjust the chart height -->
        <canvas id="dashboard-card-01" width="389" height="128"></canvas>
    </div>
</div>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
        <!--div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
                                </div-->
            <div class="font-medium text-gray-800">Alex Shatov</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">alexshatov@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$2,890.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇺🇸</div>
    </td>
</tr>
$filename
$filename
//$files = $request->input('files');
$Fund=Funds::find($id_bu);
$files=[$Fund->medical_proof,$Fund->nic_,$Fund->living_proof,$Fund->photos_of];
//dd($files);
foreach ($files as $file) {
$file_path = storage_path('app/public/' . $file);
// $filename="file";
//break; // add this to only download one file
$this->download_file('app/public/'.$file);
}
<button wire:click="download({{$Fund->id}},'medical')"  class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
    Download Medical Proof
</button>
<button wire:click="download_file({{$Fund->nic_}})" class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
    Download Nic
</button>
<button wire:click="download_file({{$Fund->living_proof}})" class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
    Download Living Proof
</button>
<button wire:click="download_file({{$Fund->photos_of}})" class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" >
    Download Photos
</button>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-06.jpg') }}" width="40" height="40" alt="Philip Harbach" />
            </div>
            <div class="font-medium text-gray-800">Philip Harbach</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">philip.h@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$2,767.04</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇩🇪</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-07.jpg') }}" width="40" height="40" alt="Mirko Fisuk" />
            </div>
            <div class="font-medium text-gray-800">Mirko Fisuk</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">mirkofisuk@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$1,220.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇫🇷</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-08.jpg') }}" width="40" height="40" alt="Burak Long" />
            </div>
            <div class="font-medium text-gray-800">Burak Long</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">longburak@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$1,890.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇬🇧</div>
    </td>
</tr>
<tr>
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                <img class="rounded-full" src="{{ asset('images/user-36-09.jpg') }}" width="40" height="40" alt="Alex Shatov" />
            </div>
            <div class="font-medium text-gray-800">Alex Shatov</div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">alexshatov@gmail.com</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">$2,890.66</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">🇺🇸</div>
    </td>
</tr>
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

