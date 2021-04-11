@extends('main')

@section('content')
<h1>Welcome here!</h1>
<img src="{{ asset('/img/welcom.png')}}" alt="Flag Madagascar" class="rounded shadow-md">
<h1 class="mt-5 text-5xl text-indigo-800 font-semibold-800">Hello You</h1>
<p class="text-gray-800">Heur local {{ date('h:i:s A') }}.</p>

@stop
