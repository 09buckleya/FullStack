@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Info</td>
        <td>Options</td>

    </tr>
    @foreach ($petitions as $item)
    <td>{{$item['id']}}</td>
    <td>{{$item['title']}}</td>
    <td>{{$item['info']}}</td>
    <td><a href={{"petition/".$item['id']}}>View</a>
        <a href={{"edit/".$item['id']}}>Edit</a>
        <a href={{"delete/".$item['id']}}>Delete</a>
    </td>
    </tr>
    @endforeach

</table>
<form action="/add">
    <input type="submit" value="Create new petition" />
</form>

@endsection