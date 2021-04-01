@extends('main')

@section ('title', 'About |' .config('app.name'))

@section('content')

<img src="{{ asset('/img/ref.png')}}" alt="Gasy Coder">

<p>Create with <span class="text-pink-500"> &hearts;</span> by GasyCoder</p>

@stop