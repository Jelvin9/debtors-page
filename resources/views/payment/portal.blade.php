@extends('layouts.app')

@section('title', 'Payment - Volare')

@section('content')
<div class="min-h-screen flex flex-col items-center py-8">
    <!-- Payment Portal Header -->
    <h1 class="text-3xl font-bold text-orange-500 mb-6">Payment Portal</h1>

    <!-- Payment Form -->
    <div class="w-11/12 md:w-1/2 lg:w-1/3 bg-white p-6 rounded-lg shadow-md">
        <form action="/submit-payment" method="POST">
            <!-- Amount Input -->
            <div class="mb-4">
                <label for="amount" class="block text-gray-600 font-semibold mb-2">Payment Amount (RM)</label>
                <input type="number" id="amount" name="amount" class="w-full p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600" placeholder="Enter payment amount" required>
            </div>

            <!-- Payment Method -->
            <div class="mb-4">
                <label for="paymentMethod" class="block text-gray-600 font-semibold mb-2">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod" class="w-full p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600">
                    <option value="creditCard">Credit Card</option>
                    <option value="bankTransfer">Bank Transfer</option>
                    <option value="ewallet">E-Wallet</option>
                </select>
            </div>

            <!-- Credit Card Information (conditional) -->
            <div id="creditCardInfo" class="hidden">
                <div class="mb-4">
                    <label for="cardNumber" class="block text-gray-600 font-semibold mb-2">Card Number</label>
                    <input type="text" id="cardNumber" name="cardNumber" class="w-full p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600" placeholder="Enter your card number">
                </div>

                <div class="mb-4 flex justify-between">
                    <div class="w-1/2 pr-2">
                        <label for="expiry" class="block text-gray-600 font-semibold mb-2">Expiry Date</label>
                        <input type="text" id="expiry" name="expiry" class="w-full p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600" placeholder="MM/YY">
                    </div>
                    <div class="w-1/2 pl-2">
                        <label for="cvv" class="block text-gray-600 font-semibold mb-2">CVV</label>
                        <input type="text" id="cvv" name="cvv" class="w-full p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600" placeholder="123">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-emerald-600 text-white p-3 rounded-lg font-bold hover:bg-emerald-700 transition-all">
                Make Payment
            </button>
        </form>
    </div>
</div>

<!-- Payment Method Toggle Script -->
<script>
    document.getElementById('paymentMethod').addEventListener('change', function () {
        const creditCardInfo = document.getElementById('creditCardInfo');
        if (this.value === 'creditCard') {
            creditCardInfo.classList.remove('hidden');
        } else {
            creditCardInfo.classList.add('hidden');
        }
    });
</script>
@endsection
