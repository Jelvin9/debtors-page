<div class="container mx-auto pl-3">
    <h2 class="text-4xl font-bold mb-6 text-white">Contact Us</h2>

    <div class="text-lg text-neutral-300 mb-6">
        <p>We are here to help! Reach out to us through the following channels:</p>
    </div>

    <div class="space-y-4">
        <div class="flex items-center">
            <i class="bi bi-envelope text-orange-500 text-2xl mr-3"></i>
            <span class="text-neutral-200">Email: <a href="mailto:support@company.com" class="text-orange-500 hover:underline">support@company.com</a></span>
        </div>

        <div class="flex items-center">
            <i class="bi bi-telephone text-orange-500 text-2xl mr-3"></i>
            <span class="text-neutral-200">Phone: <a href="tel:+1234567890" class="text-orange-500 hover:underline">+1 (234) 567-890</a></span>
        </div>

        <div class="flex items-center">
            <i class="bi bi-map text-orange-500 text-2xl mr-3"></i>
            <span class="text-neutral-200">Address: 1234 Main St, City, Country</span>
        </div>
    </div>

    <div class="mt-8">
        <h3 class="text-2xl font-semibold text-white mb-4">Contact Form</h3>
        <form action="/contact" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="text-neutral-300">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 rounded text-black" required>
            </div>
            <div>
                <label for="email" class="text-neutral-300">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 rounded text-black" required>
            </div>
            <div>
                <label for="message" class="text-neutral-300">Message</label>
                <textarea id="message" name="message" class="w-full p-2 rounded text-black" rows="4" required></textarea>
            </div>
            <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Send Message</button>
        </form>
    </div>
</div>
