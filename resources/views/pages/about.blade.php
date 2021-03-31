@extends('main')

@section ('title', 'About | ' .config('app.name'))

@section('content')

<h1>Who are We?</h1>
<p>Heur local {{ date('h:i:s A') }}.</p>
<p>Create with &hearts; by GasyCoder</p>
<p>Aller retour à l'accueil <a href="/">ici</a> </p>

@stop