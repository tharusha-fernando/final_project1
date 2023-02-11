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
            <div class="sm:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Operations</div>
                    <canvas class="p-10" id="chartPie"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart pie -->
                <script>
                    const dataPie = {
                        labels: ["Total", "Paid"],<!-- "Ruby"-->
                        datasets: [
                            {
                                label: "My First Dataset",
                                data: [{{ $totalOP_req}}, {{ $totalOP_res}}],<!--, 100-->
                                backgroundColor: [
                                    "rgb(133, 105, 241)",
                                    //"rgb(164, 101, 241)",
                                    "rgb(101, 143, 241)",
                                ],
                                hoverOffset: 4,
                            },
                        ],
                    };

                    const configPie = {
                        type: "pie",
                        data: dataPie,
                        options: {},
                    };

                    var chartBar = new Chart(document.getElementById("chartPie"), configPie);
                </script>
            </div>
            <div class="sm:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Medical Equipment</div>
                    <canvas class="p-10" id="chartPie1"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart pie -->
                <script>
                    const dataPie1 = {
                        labels: ["Total", "Paid"],<!-- "Ruby"-->
                        datasets: [
                            {
                                label: "My First Dataset",
                                data: [{{$totalMeq_req}}, {{$totalMeq_res}}],<!--, 100-->
                                backgroundColor: [
                                    "rgb(133, 105, 241)",
                                    //"rgb(164, 101, 241)",
                                    "rgb(101, 143, 241)",
                                ],
                                hoverOffset: 4,
                            },
                        ],
                    };

                    const configPie1 = {
                        type: "pie",
                        data: dataPie1,
                        options: {},
                    };

                    var chartBar1 = new Chart(document.getElementById("chartPie1"), configPie1);
                </script>
            </div>
            <div class="sm:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Medicine</div>
                    <canvas class="p-10" id="chartPie2"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart pie -->
                <script>
                    const dataPie2 = {
                        labels: ["Total", "Paid"],<!-- "Ruby"-->
                        datasets: [
                            {
                                label: "My First Dataset",
                                data: [{{ $totalMed_req}}, {{ $totalMed_res}}],<!--, 100-->
                                backgroundColor: [
                                    "rgb(133, 105, 241)",
                                    //"rgb(164, 101, 241)",
                                    "rgb(101, 143, 241)",
                                ],
                                hoverOffset: 4,
                            },
                        ],
                    };

                    const configPie2 = {
                        type: "pie",
                        data: dataPie2,
                        options: {},
                    };

                    var chartBar2 = new Chart(document.getElementById("chartPie2"), configPie2);
                </script>
            </div>
            <div class="sm:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Other</div>
                    <canvas class="p-10" id="chartPie3"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart pie -->
                <script>
                    const dataPie3 = {
                        labels: ["Total", "Paid"],<!-- "Ruby"-->
                        datasets: [
                            {
                                label: "My First Dataset",
                                data: [{{$totalOt_req}}, {{$totalOt_res}}],<!--, 100-->
                                backgroundColor: [
                                    "rgb(133, 105, 241)",
                                    //"rgb(164, 101, 241)",
                                    "rgb(101, 143, 241)",
                                ],
                                hoverOffset: 4,
                            },
                        ],
                    };

                    const configPie3 = {
                        type: "pie",
                        data: dataPie3,
                        options: {},
                    };

                    var chartBar3 = new Chart(document.getElementById("chartPie3"), configPie3);
                </script>
            </div>

        </div>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">
                @livewire('admin.view-funds')
            </div>

        </div>

    </div>
</x-app-layout>
