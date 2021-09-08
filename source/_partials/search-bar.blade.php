<div class="relative flex items-center w-full text-gray-600 focus-within:text-gray-800">
    {{-- Heroicon: solid/search --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-0 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>

    <input x-ref="search-bar" x-model.debounce="searchTerm" type="search" name="search" id="search" class="w-full px-4 pl-10 py-5 transition border-b-2 border-gray-100 focus:outline-none focus:border-secondary" placeholder="Search for components..." aria-label="Search for components...">
</div>
