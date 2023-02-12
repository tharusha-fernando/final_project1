<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
        <div class="h-3 relative max-w-xl rounded-full overflow-hidden">
            <div class="w-full h-full bg-gray-200 absolute"></div>
            <div id="bar" class="h-full bg-emerald-500 relative w-0"></div>
        </div>

        <script>
            let progress = 0;
            let invervalSpeed = 10;
            let incrementSpeed = 1;
            document.addEventListener("DOMContentLoaded", function(){
                let bar = document.getElementById('bar');
                progressInterval = setInterval(function(){
                    progress += incrementSpeed;
                    bar.style.width = progress + "%";
                    if(progress >= 100){
                        clearInterval(progressInterval);
                    }
                }, invervalSpeed);
            });
        </script>
        @if($paymentstatus=='first')

            <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Bank</dt>
                    <dd class="text-lg font-semibold">Transfer Money With A Bank Deposit</dd><button wire:click="approve('dp')" class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Select
                    </button>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">PayPal</dt>
                    <dd class="text-lg font-semibold">Transfer Money With PayPal</dd><button wire:click="approve('pp')" class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                       Select
                    </button>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Courier Pickup</dt>
                    <dd class="text-lg font-semibold">Transfer Money With Courier Pickup</dd><button wire:click="approve('cp')" class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Select
                    </button>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Credit Debit Cards</dt>
                    <dd class="text-lg font-semibold">Transfer Money With Courier Through Credit Debit Card</dd><button wire:click="approve(crdp)" class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Select
                    </button>
                </div>
            </dl>

        @elseif($paymentstatus=='dp')
            <div class="flex flex-col ...">
                <div>01</div>
                <div>02</div>
                <div>03</div>
            </div>
        @endif
    </div>
</div>
