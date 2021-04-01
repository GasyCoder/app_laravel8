@extends ('main')
@section ('title', 'Contact Us |' .config('app.name'))
@section('content')
<h1>Contact Us</h1>
<form>
	<label>Name </label>
	<input type="text" name="" class="form-control"><br>
	<label>Messages </label>
	<textarea rows="5"></textarea>
	<button class="" type="submit">Send</button>
</form>
@stop