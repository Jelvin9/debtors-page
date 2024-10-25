@extends('layouts.app')

@section('title', 'History - Volare')

@section('content')
<div class="min-h-screen bg-gray-800 text-gray-200 py-8 rounded-lg">
    <h1 class="text-3xl font-bold text-gray-200 text-center mb-6">Payment History</h1>
    <div class="w-auto md:w-3/4 lg:w-1/2 mx-auto bg-gray-900 rounded-lg shadow-md flex justify-center">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-emerald-600 text-white text-center">
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Amount (RM)</th>
                    <th class="px-4 py-2">Payment Method</th>
                    <th class="px-4 py-2">Collector</th>
                    <th class="px-4 py-2">Attachment</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-800 text-center">
                    <td class="border px-4 py-2">25th Oct 2024</td>
                    <td class="border px-4 py-2">500.00</td>
                    <td class="border px-4 py-2">Credit Card</td>
                    <td class="border px-4 py-2">Agent Y</td>
                    <td class="border px-4 py-2"><i class="bi bi-eye"></i></td>
                    <td class="border px-4 py-2 text-green-500 font-semibold">Paid</td>
                </tr>
                <!-- Add more rows as needed... -->
            </tbody>
        </table>
    </div>
</div>

@endsection
