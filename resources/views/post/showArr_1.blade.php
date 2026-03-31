<x-layout>
	@php
	$sum = 0	
	@endphp
	@if (isset($arr) && count($arr)>0)
	@foreach ($arr as $item)
		@php
			$sum += $item
		@endphp
	@endforeach
	Сумма элементов массива: {{$sum}}
	@else
	Колличество элементов 0
	@endif
</x-layout>