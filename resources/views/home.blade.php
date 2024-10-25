@extends('layouts.app')

@section('title', 'Home - Volare')

@section('content')

<div class="flex flex-col items-center">
    <!-- Notice Banner -->
    <div class="bg-gray-200 w-1/2 text-center py-2 mb-6">
        <div class="overflow-hidden">
            <p class="animate-marquee whitespace-nowrap text-gray-600">
                <b>Important notice:</b> Your next payment is due soon! Please ensure timely payments.
            </p>
        </div>
    </div>

    <div class="w-11/12 md:w-3/4 lg:w-1/2 bg-orange-400 rounded-lg p-4 mb-4">
        <h5 class="text-2xl font-bold text-center">Welcome, Jelvin</h5>
    </div>
    <!-- Total Balance -->
    <div class="w-11/12 md:w-3/4 lg:w-1/2 bg-yellow-200 rounded-lg p-4 mb-4">
        <p class="text-2xl font-bold">Total Balance: <span class="text-orange-500">RM 5,000</span></p>
    </div>

    <!-- Next Payment -->
    <div class="w-11/12 md:w-3/4 lg:w-1/2 bg-orange-200 rounded-lg p-4 mb-4 flex flex-row">
        <p class="text-2xl font-bold self-center">Next Payment:</p>
        <div class="flex flex-col ml-2">
        <p class="text-lg">Date: <span class="font-semibold">25th October 2024</span></p>
        <p class="mt-1 text-lg">Amount: <span class="font-semibold">RM 500</span></p>
        </div>
    </div>

    <!-- Pay Now Button -->
    <a href="/payment-portal" class="w-11/12 md:w-3/4 lg:w-1/2 text-center bg-green-200 rounded-full p-3 hover:bg-green-500 hover:text-white transition-all">
        <span class="font-bold text-lg">Pay Now</span>
    </a>
</div>

<!-- Add marquee animation for the notice -->
<style>
    .animate-marquee {
        display: inline-block;
        animation: marquee 10s linear infinite;
    }

    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
</style>
@endsection
