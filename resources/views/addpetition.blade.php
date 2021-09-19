@extends('layouts.app')

@section('content')
<h1>New Petition</h1>
<form action="add" method="POST">
{{ csrf_field() }}
    <input type="text" name="title" placeholder="Enter Title"> <br> <br>
    <input type="text" name="info" placeholder="Enter Description"> <br> <br>
    <button type="submit"> Create Petition </button>
</form>
@endsection