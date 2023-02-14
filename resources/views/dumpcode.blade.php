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
<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
    <a class="block text-slate-200 hover:text-white transition duration-150" :class="open && 'hover:text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current text-slate-600" d="M8.07 16H10V8H8.07a8 8 0 110 8z" />
                    <path class="fill-current text-slate-400" d="M15 12L8 6v5H0v2h8v5z" />
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Authentication</span>
            </div>
            <!-- Icon -->
            <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                </svg>
            </div>
        </div>
    </a>
    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
        <ul class="pl-9 mt-1" :class="{ 'hidden': !open }" x-cloak>
            <li class="mb-1 last:mb-0">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign In</span>
                    </a>
                </form>
            </li>
            <li class="mb-1 last:mb-0">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                <a class="block text-slate-200 hover:text-white transition duration-150" :class="open && 'hover:text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                <path class="fill-current text-slate-400" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Onboarding</span>
                        </div>
                        <!-- Icon -->
                        <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                    <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['onboarding'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step 1</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step 2</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step 3</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step 4</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Components -->
            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['component'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['component']) ? 1 : 0 }} }">
                <a class="block text-slate-200 hover:text-white transition duration-150" :class="open && 'hover:text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <circle class="fill-current @if(in_array(Request::segment(1), ['component'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" cx="16" cy="8" r="8" />
                                <circle class="fill-current @if(in_array(Request::segment(1), ['component'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" cx="8" cy="16" r="8" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Components</span>
                        </div>
                        <!-- Icon -->
                        <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </a><div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                    <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['component'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('button-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Button</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('form-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Input Form</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('dropdown-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dropdown</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('alert-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Alert & Banner</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('modal-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Modal</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('pagination-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pagination</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tabs-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tabs</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('breadcrumb-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Breadcrumb</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('badge-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Badge</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('avatar-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Avatar</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tooltip-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tooltip</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('accordion-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Accordion</span>
                            </a>
                        </li>
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('icons-page')){{ '!text-indigo-500' }}@endif" href="#0">
                                <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Icons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li><div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3>
            </div>   <!-- More group --><div class="flex flex-col col-span-full sm:col-span-4 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                <div class="px-5 pt-5">
                    <header class="flex justify-between items-start mb-2">
                        <!-- Icon -->
                        <img src="{{ asset('images/icon-02.svg') }}" width="32" height="32" alt="Icon 02" />
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
                    <h2 class="text-lg font-semibold text-slate-800 mb-2">Acme Advanced</h2>
                    <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div>
                    <div class="flex items-start">
                        <div class="text-3xl font-bold text-slate-800 mr-2">${{ number_format($dataFeed->sumDataSet(2, 1), 0) }}</div>
                        <div class="text-sm font-semibold text-white px-1.5 bg-amber-500 rounded-full">-14%</div>
                    </div>
                </div>
                <!-- Chart built with Chart.js 3 -->
                <!-- Check out src/js/components/dashboard-card-02.js for config -->
                <div class="grow">
                    <!-- Change the height attribute to adjust the chart height -->
                    <canvas id="dashboard-card-02" width="389" height="128"></canvas>
                </div>
            </div>


    </div>bg-white!----<div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div>
    <div class="flex items-start">
        <div class="text-3xl font-bold text-slate-800 mr-2">${{ number_format($dataFeed->sumDataSet(1, 1), 0) }}</div>
        <div class="text-sm font-semibold text-white px-1.5 bg-emerald-500 rounded-full">+49%</div>
    </div>,'Data','imageurl','Data','imageurl'
    ,'Data','imageurl','Data','imageurl'
    ->name('json_data_feed')->name('json_data_feed')
    ->name('json_data_feed')->name('json_data_feed') <!-- Welcome banner -->
    <x-dashboard.welcome-banner /> <!-- Welcome banner -->
    <x-dashboard.welcome-banner /> <!-- Welcome banner -->
    <x-dashboard.welcome-banner /> <!-- Welcome banner -->
    <x-dashboard.welcome-banner /> @if(\Illuminate\Support\Facades\Auth::user()->hasRole('administrator'))
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/about_us">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">About Us</span>
            </div>
        </a>
    </li>
    <!-- Request funds -->
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/request_fundsA">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Request Funds</span>
            </div>
        </a>
    </li>
    <!-- View funds -->
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/view_funds">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                    <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">View Funds</span>
            </div>
        </a>
    </li>
    <!-- new employee -->
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['campaigns'])){{ 'bg-slate-900' }}@endif">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['campaigns'])){{ 'hover:text-slate-200' }}@endif" href="/new_employee">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                    <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New Employee</span>
            </div>
        </a>
    </li> @if(\Illuminate\Support\Facades\Auth::user()->hasRole('administrator'))
        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/about_us">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">About Us</span>
                </div>
            </a>
        </li>
        <!-- Request funds -->
        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/request_fundsA">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Request Funds</span>
                </div>
            </a>
        </li>
        <!-- View funds -->
        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/view_funds">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">View Funds</span>
                </div>
            </a>
        </li>
        <!-- new employee -->
        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['campaigns'])){{ 'bg-slate-900' }}@endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['campaigns'])){{ 'hover:text-slate-200' }}@endif" href="/new_employee">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                        <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New Employee</span>
                </div>
            </a>
        </li> @if(\Illuminate\Support\Facades\Auth::user()->hasRole('administrator'))
            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/about_us">
                    <div class="flex items-center">
                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                        </svg>
                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">About Us</span>
                    </div>
                </a>
            </li>
            <!-- Request funds -->
            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/request_fundsA">
                    <div class="flex items-center">
                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                        </svg>
                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Request Funds</span>
                    </div>
                </a>
            </li>
            <!-- View funds -->
            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/view_funds">
                    <div class="flex items-center">
                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                            <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                        </svg>
                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">View Funds</span>
                    </div>
                </a>
            </li>
            <!-- new employee -->
            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['campaigns'])){{ 'bg-slate-900' }}@endif">
                <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['campaigns'])){{ 'hover:text-slate-200' }}@endif" href="/new_employee">
                    <div class="flex items-center">
                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                            <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                            <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                        </svg>
                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New Employee</span>
                    </div>
                </a>
            </li> @if(\Illuminate\Support\Facades\Auth::user()->hasRole('administrator'))
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/about_us">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">About Us</span>
                        </div>
                    </a>
                </li>
                <!-- Request funds -->
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/request_fundsA">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Request Funds</span>
                        </div>
                    </a>
                </li>
                <!-- View funds -->
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="/view_funds">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                                <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">View Funds</span>
                        </div>
                    </a>
                </li>
                <!-- new employee -->
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['campaigns'])){{ 'bg-slate-900' }}@endif">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['campaigns'])){{ 'hover:text-slate-200' }}@endif" href="/new_employee">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New Employee</span>
                        </div>
                    </a>
                </li>@elseif(\Illuminate\Support\Facades\Auth::user()->hasRole('patient_user'))@elseif(\Illuminate\Support\Facades\Auth::user()->hasRole('patient_user'))@elseif(\Illuminate\Support\Facades\Auth::user()->hasRole('patient_user'))@elseif(\Illuminate\Support\Facades\Auth::user()->hasRole('patient_user')) <x-app.sidebar /> <x-app.sidebar /> <x-app.sidebar /> <x-app.sidebar />
                ,'Data','imageurl','Data','imageurl','Data','imageurl','Data','imageurl'
                ,'Data','imageurl','Data','imageurl','Data','imageurl','Data','imageurl'<form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form><form class="w-full max-w-lg" wire:submit.prevent="new_employeecrusneac">
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input wire:model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Last Name
                                </label>
                                <input wire:model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Mobile Number
                                </label>
                                <input wire:model="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Phone Number">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Email
                                </label>
                                <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Email">
                                <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                            </div>
                        </td>
                    </tr>
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

                    </tbody>
                </form>    <div></div>    <div></div>    <div></div>    <div></div>    <div></div>    <div></div>    <div></div>    <div></div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div><div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Branch
                    </label>
                    <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Account Number
                    </label>
                    <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                    <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                </div>  <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                        <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Transfer Money With A Bank Deposit
                        </button>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                        <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                        <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve('crdp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                            Select
                        </button>
                    </div>
                </dl>
                <td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Update Image
                        </label>
                        <input wire:model="doc_upload" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="First Name">

                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <!-- Icon -->
                    <!--img src="asseageurl)}}" widt{h{="200" height="200" /-->
                    <!-- Menu button -->

                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><td class="p-2 whitespace-nowrap">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            About Us
                        </label>
                        <textarea wire:model="about_us" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>
                    </div>
                </td><x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
                <x-guest>
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
                </x-guest>
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
                <x-dashboard.dashboard-card-13 /> <!-- Line chart (Acme Plus) -->
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
                <x-dashboard.dashboard-card-13 /> <!-- Line chart (Acme Plus) -->
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
                <x-dashboard.dashboard-card-13 /> <!-- Line chart (Acme Plus) -->
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
                <x-dashboard.dashboard-card-13 /> <!-- Line chart (Acme Plus) -->
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
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <x-datepicker />
                <!-- Welcome banner -->
                <x-dashboard.welcome-banner />  <!-- Welcome banner -->
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner /><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Funds Required : LKR {{$Funds->amount}} <br>
                    Funds Recieed : LKR {{$Tot_donations}}
                </label>
                <div class="h-3 relative rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div><div class="mb-4">


                    <script>
                        let progress = 0;
                        let invervalSpeed = 10;
                        let incrementSpeed = 1;
                        document.addEventListener("DOMContentLoaded", function(){
                            let bar = document.getElementById('bar');
                            progressInterval = setInterval(function(){
                                progress += incrementSpeed;
                                bar.style.width = progress + "%";
                                if(progress >= {{$percentage}}){
                                    clearInterval(progressInterval);
                                }
                            }, invervalSpeed);
                        });
                    </script>
                </div>
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <x-dashboard.welcome-banner />
                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign Up</span>
                    </a>
                </form>
            </li>
            <li class="mb-1 last:mb-0">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Reset Password</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</li>

