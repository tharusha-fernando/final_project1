<x-guest>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">


            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">


            </div>

        </div>
        <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">About Us</h2>
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
                            <td class="p-2">
                                <h2 class="text-lg font-semibold text-slate-800 mb-2">About Us</h2>
                                <!--div class="text-xs font-semibold text-slate-400 uppercase mb-1">Sales</div-->
                                <p>{{$Data->about_us}}</p>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <img src="{{asset($imageurl)}}" width="400" height="400" />
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 whitespace">
                                <h2 class="text-lg font-semibold text-slate-800 mb-2">Vision</h2>

                      <p>{{$Data->vision}}</p>
                            </td>
                            <td class="p-2 whitespace">
                                <h2 class="text-lg font-semibold text-slate-800 mb-2">Our Achievemnets</h2>
                                <p>{{$Data->our_achievmnets}}</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <!-- Cards -->


    </div>
</x-guest>
