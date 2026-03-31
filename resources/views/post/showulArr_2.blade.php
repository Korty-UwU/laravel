<x-layout>
    @forelse ($arr as $elem)
    @php
        $sqrt = $elem**2
    @endphp
	<ul>{{ $sqrt }}</ul>
@empty
<p>в массиве нет элементов</p>
@endforelse
</x-layout>