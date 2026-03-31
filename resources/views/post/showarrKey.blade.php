<x-layout>
    @forelse ($arr as $elem)
	{{$key}}<ul>{{ $elem }}</ul>
@empty
<p>в массиве нет элементов</p>
@endforelse
</x-layout>