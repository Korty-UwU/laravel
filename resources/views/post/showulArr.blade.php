<x-layout>
    @forelse ($arr as $elem)
	<ul>{{ $elem }}</ul>
@empty
<p>в массиве нет элементов</p>
@endforelse
</x-layout>