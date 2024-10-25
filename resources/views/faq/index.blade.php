@extends('layouts.app')

@section('title', 'FAQ - Volare')

@section('content')
        <div class="flex space-x-8">

            <!-- Include the Left Column -->
        <div>
        @include('partials.sidebar')
        </div>

            <!-- Right Column: FAQ -->
            <div class="w-4/6" id="sidebar-content">

                <!-- Placeholder content for FAQ -->
            <div id="faq-section">
                <div class="flex-row content-center mt-10">
                <h2 class="text-5xl font-bold mb-5 ml-6 text-white mt-5"><i class="bi bi-arrow-90deg-left"></i></h2>
                <p class="text-2xl text-white">Select a section from the User Guide on the left to get the answers!</p>
                </div>
            </div>

            </div>
        </div>

        <script>
            // Listen for clicks on User Guide links
            document.querySelectorAll('.user-guide-link').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    loadContent(this.getAttribute('data-url'));
                });
            });

            // Function to load content via AJAX
            function loadContent(url) {
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('sidebar-content').innerHTML = data;
                    })
                    .catch(error => console.log('Error:', error));
            }
        </script>
        <script>
            document.querySelector('.bi-search').addEventListener('click', function() {
                const query = document.querySelector('input[type="text"]').value;
                if (query) {
                    // Perform the search using AJAX
                    fetch(`/search?query=${encodeURIComponent(query)}`)
                        .then(response => response.json())
                        .then(data => {
                            const resultsContainer = document.getElementById('searchResults');
                            resultsContainer.innerHTML = ''; // Clear previous results

                            if (data.length > 0) {
                                data.forEach(item => {
                                    const resultDiv = document.createElement('div');
                                    resultDiv.classList.add('bg-neutral-800', 'p-4', 'rounded-lg', 'shadow-md');
                                    resultDiv.innerHTML = `<h3 class="text-xl font-bold text-orange-500">${item.question}</h3>
                                                           <p class="text-neutral-200">${item.answer}</p>`;
                                    resultsContainer.appendChild(resultDiv);
                                });
                            } else {
                                resultsContainer.innerHTML = '<p class="text-neutral-400">No results found.</p>';
                            }

                            // Show the modal
                            document.getElementById('searchModal').classList.remove('hidden');
                        });
                }
            });

            // Close the modal
            document.getElementById('closeModal').addEventListener('click', function() {
                document.getElementById('searchModal').classList.add('hidden');
            });

            // Close the modal when clicking outside
            window.addEventListener('click', function(event) {
                const modal = document.getElementById('searchModal');
                if (event.target == modal) {
                    modal.classList.add('hidden');
                }
            });
        </script>

@endsection

