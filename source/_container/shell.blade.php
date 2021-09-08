<article
    x-show.transition="searchTerm.length > 0 ? new String('{{ $name }}').toLowerCase().includes(searchTerm.toLowerCase() : true;"
    id="{{ $component }}">

    <div x-data="{ open: false }" class="flex flex-col">
        <span class="border-l-4 border-gray-400 pl-3 mb-2 flex items-center justify-between space-x-2">
            <h4 class="text-lg sm:text-2xl">{{ $name }}</h4>
        </span>

        <a href="{{ $link }}" class="text-xs self-start sm:text-sm text-gray-600 mb-4 transition duration-150 hover:text-primary hover:underline focus:underline focus:text-primary" title="View code for {{ $name }}" target="_blank">View Code</a>

        @include('_components/'.$component)
    </div>
</article>
