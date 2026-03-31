<x-layout>
    @unless($age >=18)
    {{ $text1 }}
    @endunless
    {{ $text0 }}
</x-layout>