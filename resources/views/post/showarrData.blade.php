<x-layout>
	@if (isset($arr) && count($arr)>0)
	@foreach ($arr as $item)
	<ul>{{$item}}</ul>
	@endforeach
	@else
	{{$arr}}
	@endif
</x-layout>