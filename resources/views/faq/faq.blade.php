<!-- FAQ Section -->
<h2 class="text-5xl font-bold mb-5 ml-6 text-white">FAQ</h2>

@foreach ($faqs as $faq)
    @if($loop->odd)
        <!-- Style for odd FAQs -->
        <div class="bg-gradient-to-r from-yellow-500 via-yellow-500 via-60% to-orange-500 rounded-3xl px-6 py-3">
            <p class="text-2xl font-semibold">{{ $faq->question }}</p>
        </div>
        <div class="flex items-center mb-6 pl-3">
            <h2 class="flex-none w-14 text-3xl text-orange-500 text-center text-bold self-auto">A :</h2>
            <p class="mt-2 text-white text-lg">{{ $faq->answer }}</p>
        </div>
    @else
        <!-- Style for even FAQs -->
        <div class="bg-yellow-500 rounded-se-3xl rounded-es-3xl rounded-ss-sm rounded-ee-sm px-6 py-3">
            <p class="text-2xl font-semibold">{{ $faq->question }}</p>
        </div>
        <div class="flex items-center mb-6 pl-3">
            <h2 class="flex-none w-14 text-3xl text-orange-500 text-center text-bold self-auto">A :</h2>
            <p class="mt-2 text-white text-lg">{{ $faq->answer }}</p>
        </div>
    @endif
@endforeach



