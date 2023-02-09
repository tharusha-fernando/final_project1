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
