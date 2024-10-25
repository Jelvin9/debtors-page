<!-- Search Bar -->
<div class="flex items-center mb-3">
    <input type="text" class="w-40 p-2 border border-neutral-100 rounded-lg focus:outline-none focus:ring focus:ring-emerald-600" placeholder="Have a question?">
    <button class="ml-2 px-3 py-2 bg-emerald-600 text-white rounded-3xl"><i class="bi bi-search"></i></button>
</div>

<div class="w-52 bg-white p-3 rounded-lg shadow flex-1 h-80">
    <h2 class="text-3xl font-bold mb-4">User Guide</h2>
    <ul class="space-y-3">
        <li><a href="#" class="user-guide-link text-neutral-700 hover:text-yellow-500 text-lg" data-url="{{ route('loadFaqContent', ['topic' => 'payment']) }}">How Collection Works</a></li>
        <hr>
        <li><a href="#" class="user-guide-link text-neutral-700 hover:text-yellow-500 text-lg" data-url="{{ route('loadFaqContent', ['topic' => 'rights']) }}">Your Rights</a></li>
        <hr>
        <li><a href="#" class="user-guide-link text-neutral-700 hover:text-yellow-500 text-lg" data-url="{{ route('loadFaqContent', ['topic' => 'obligations']) }}">Obligations</a></li>
        <hr>
        <li><a href="#" class="user-guide-link text-neutral-700 hover:text-yellow-500 text-lg" data-url="{{ route('loadFaqContent', ['topic' => 'faq']) }}">FAQ</a></li>
        <hr>
        <li><a href="#" class="user-guide-link text-neutral-700 hover:text-yellow-500 text-lg" data-url="{{ route('loadFaqContent', ['topic' => 'contact']) }}">Contact Us</a></li>
    </ul>
</div>

<!-- Modal -->
<div id="searchModal" class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center hidden z-50">
    <div class="bg-neutral-900 p-6 rounded-lg w-1/2 shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-neutral-200">Search Results</h2>
            <button id="closeModal" class="text-emerald-500 text-4xl">&times;</button>
        </div>
        <div id="searchResults" class="max-h-64 overflow-y-auto space-y-4">
            <!-- Search results will be dynamically populated here -->
        </div>
    </div>
</div>

