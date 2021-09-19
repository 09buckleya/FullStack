@extends('layouts.app')

@section('content')
<h1>Update Petition</h1>
<form action="edit" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$data['id']}}">
    <!-- <input type="hidden" name="user_id" value="{{$data['user_id']}}"> -->
    <input type="text" name="title" value="{{$data['title']}}"> <br> <br>
    <input type="text" name="info" value="{{$data['info']}}"> <br> <br>
    <button type="submit"> Update </button>
</form>
@endsection