<div>
    {{-- Stop trying to control. --}}
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-full  shadow-lg rounded-sm border border-gray-200">
            <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Total Donations</h2>
                </header>
                <div class="p-3">

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <!-- Table header -->
                            <!--thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
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
                            </thead-->
                            <!-- Table body -->
                            <tbody class="text-sm divide-y divide-gray-100">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Total Amount</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">{{$amount}}</div>
                                </th>

                            </tr>


                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
