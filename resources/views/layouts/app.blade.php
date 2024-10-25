<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FAQ - Volare')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-900 font-sans flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="bg-neutral-800 shadow-sm py-4 rounded-b-xl">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-bold text-yellow-300 px-6 pointer-events-none">Volare</div>
            <nav class="space-x-6 -ml-12">
                <a href="{{ url('/home') }}" class="text-neutral-200 transition-all ease-out delay-150 duration-300 hover:text-xl hover:border-b-2 border-b-yellow-400">Home</a>
                <a href="{{ url('/payment') }}" class="text-neutral-200 transition-all ease-out delay-150 duration-300 hover:text-xl hover:border-b-2 border-b-yellow-400">Payment</a>
                <a href="{{ url('/history') }}" class="text-neutral-200 transition-all ease-out delay-150 duration-300 hover:text-xl hover:border-b-2 border-b-yellow-400">History</a>
                <a href="{{ route('Faq') }}" class="text-neutral-200 transition-all ease-out delay-150 duration-300 hover:text-xl hover:border-b-2 border-b-yellow-400">Help</a>
            </nav>
            <a href="#" class="px-4 py-2 bg-yellow-400 text-neutral-100 rounded-3xl outline outline-offset-2 outline-yellow-300 cursor-pointer">Login</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-8 mt-8 p-4 flex-1">
        @yield('content')

        <!-- Chatbot Icon -->
        <div class="fixed bottom-8 right-8">
            <button class="px-4 py-3 bg-emerald-600 text-white text-2xl rounded-full shadow-lg hover:bg-teal-400 transition delay-300 duration:300 hover:animate-bounce"><i class="bi bi-robot"></i></button>
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
