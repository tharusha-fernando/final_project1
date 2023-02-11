<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="sm:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Pie chart</div>
            <canvas class="p-10" id="chartPie"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart pie -->
        <script>
            const dataPie = {
                labels: ["JavaScript", "Python", "Ruby"],
                datasets: [
                    {
                        label: "My First Dataset",
                        data: [300, 50, 100],
                        backgroundColor: [
                            "rgb(133, 105, 241)",
                            "rgb(164, 101, 241)",
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
</div>
