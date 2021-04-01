@extends('main')

@section('content')

<img src="{{ asset('/img/flag.jpg')}}" alt="Flag Madagascar" class="rounded shadow-md">
<h1 class="mt-5 text-5xl text-indigo-800 font-semibold-800">Hello Malagasy</h1>
<p class="text-gray-800">Heur local {{ date('h:i:s A') }}.</p>

@stop
