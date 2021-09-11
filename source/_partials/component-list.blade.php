<div class="">
    <div class="grid gap-4 text-base md:grid-cols-2">
        <div class="space-y-4">
            <h2 class="text-gray-600 italic">Pure Alpine & Tailwind, baby:</h2>
            <ul class="space-y-4 font-normal text-gray-400 sm:pl-6 sm:border-l-2 sm:border-gray-100">
                @foreach($components as $component)
                    @unless($component->isPure === false)
                        <li>
                            <a href="{{ $component->getUrl() }}" class="hover:text-primary hover:underline">{{ $component->name }}</a>
                        </li>
                    @endunless
                @endforeach
            </ul>
        </div>

        <div class="space-y-4">
            <h2 class="text-gray-600 italic">Supercharging with other libraries:</h2>
            <ul class="space-y-4 font-normal text-gray-400 sm:pl-6 sm:border-l-2 sm:border-gray-100">
                @foreach($components as $component)
                    @unless($component->isPure)
                        <li>
                            <a href="{{ $component->getUrl() }}" class="hover:text-primary hover:underline">{{ $component->name }}</a>
                        </li>
                    @endunless
                @endforeach
            </ul>
        </div>
    </div>
</div>
