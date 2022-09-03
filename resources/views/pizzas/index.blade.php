@extends('layout.layout')

@section('content')
<div class="flex justify-center mt-4 sm:items-center sm:justify-between">
    <div class="text-center text-sm text-gray-500 sm:text-left">
        @foreach($pizzas as $pizza)
            <div>
                {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}

                @if($loop -> first)
                <span> - first in the loop</span>
                @endif

                @if($loop -> last)
                    <span> - last in the loop</span>
                @endif
            </div>
        @endforeach

    </div>       
</div>
@endsection