<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="mb-4">
        <label class="block m-auto text-center inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Funds Required : LKR {{$Funds->amount}} <br>
            Funds Recieed : LKR {{$Tot_donations}}
        </label>
        <div class="h-3 relative rounded-full overflow-hidden">
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
                    if(progress >= {{$percentage}}){
                        clearInterval(progressInterval);
                    }
                }, invervalSpeed);
            });
        </script>
    </div>
    <div class="col-span-full bg-white shadow-lg rounded-sm border border-gray-200">

        @if($paymentstatus=='first')
            <dl class=" text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="flex flex-col pt-3">

                    <button wire:click="approve('crdp')" class="bg-indigo-600 mb-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Transfer Money <!--With Courier--> Through Credit/Debit Card
                    </button>
                </div>
                <div class="flex flex-col pb-3">
                    <button wire:click="approve('dp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Transfer Money With A Bank Deposit
                    </button>
                </div>
                <div class="flex flex-col py-3">
                    <button wire:click="approve('pp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Transfer Money With PayPal
                    </button>
                </div>
                <div class="flex flex-col pt-3">

                    <button wire:click="approve('cp')" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
                        Transfer Money With Courier Pickup
                    </button>
                </div>
            </dl>

        @elseif($paymentstatus=='dp')
            <div >
                <form wire:submit.prevent="dp_pay">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Bank
                        </label>
                        <input wire:model="bank" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Bank" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Branch
                        </label>
                        <input wire:model="branch" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Branch" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Account Number
                        </label>
                        <input wire:model="account_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Account" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Amount
                        </label>
                        <input wire:model="amount_" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Amount" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                        <button class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Submit
                        </button>
                        <button class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" type="reset">
                            Cancel
                        </button>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Please Send The Reciept To Our Email Address Or Call And Inform Us
                        </label>
                        <p>
                            E-mail : SuwasethaD@Gmail.com</p>
                        <p>
                            HotLine : 07156200
                        </p>

                    </div>
                </form>
            </div>

        @elseif($paymentstatus=='pp')
            <div >
                <form wire:submit.prevent="paypal_payment">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Email Address
                        </label>
                        <input wire:model="email_pp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Email" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>


                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Amount
                        </label>
                        <input wire:model="amount_pp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Amount" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                        <button class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Submit
                        </button>
                        <button class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" type="reset">
                            Cancel
                        </button>
                    </div>
                    <!--div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Please Send The Reciept To Our Email Address Or Call And Inform Us
                        </label>
                        <p>
                            E-mail : SuwasethaD@Gmail.com</p>
                        <p>
                            HotLine : 07156200
                        </p>
                    </div-->
                </form>
            </div>
        @elseif($paymentstatus=='cp')
            <div-- >
                <form wire:submit.prevent="cp_pay">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Name
                        </label>
                        <input wire:model="name_cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Home Address
                        </label>
                        <input wire:model="address_cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>

                    <div class="w-full  px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Phone Number
                        </label>
                        <input wire:model="Phone_numb" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Phone Number" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>
                    <div class="w-full  px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            City
                        </label>
                        <input wire:model="city_cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="City" required>

                    </div>
                    <div class="w-full  px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Amount
                        </label>
                        <input wire:model="amount_cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Amount" required>

                    </div>
                    <!--div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Phone Number
                        </label>
                        <input wire:model="phone_numbcp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Last Name">
                        <!p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div-->
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Email
                        </label>
                        <input wire:model="email_cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Email" required>
                        <!--p class="text-red-500 text-xs italic">Please fill out this field.</p-->
                    </div>
                    <div class="w-full  px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Donate Type
                        </label>
                        <div class="flex justify-center">
                            <div class="inline-flex flex gap-6">
                                <div class="form-check">
                                    <input wire:model="cp_type" value="cash" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                        Cash
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input wire:model="cp_type" value="medicine" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                        Medicine
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input wire:model="cp_type" value="equipments" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                        Equipments
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <button class="bg-emerald-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Submit
                        </button>
                        <button class="bg-gray-500 hover:bg-gray-200 text-white font-bold py-2 px-4 rounded-full" type="reset">
                            Cancel
                        </button>
                    </div>
                </form>
    </div>
    @elseif($paymentstatus=='crdp')
        <form class="bg-white p-6 rounded-lg" wire:submit.prevent="pay_crdp">
            <div class="mb-4">
                <label class="block font-bold mb-2 text-gray-700" for="card-number">
                    Card Number
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="card-number"
                    type="text"
                    wire:model="card_numb"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2 text-gray-700" for="name-on-card">
                    Name on Card
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="name-on-card"
                    type="text"
                    wire:model="nameonthecard"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2 text-gray-700" for="expiry-date">
                    Expiry Date
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="expiry-date"
                    type="month"
                    wire:model="exp_date"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2 text-gray-700" for="cvv">
                    CVV
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="cvv"
                    type="text"
                    wire:model="csv"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2 text-gray-700" for="name-on-card">
                    Amount
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="name-on-card"
                    type="number"
                    wire:model="amount_crdt"
                    required
                >
            </div>
            <div class="mb-6 text-center">
                <button
                    class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded"
                    type="submit"<!--dsdjisdjisjdisdjs-->

                Submit
                </button>
            </div>
        </form>


    @endif
</div>
</div>
