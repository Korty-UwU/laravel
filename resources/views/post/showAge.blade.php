<x-layout>
    @if($age > 18)
    {{ $text }}
    @elseif($age == 18)
    {{ $text1 }}
    @elseif($age < 18)
    {{ $text2 }}
    @endif
</x-layout>