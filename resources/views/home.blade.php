@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div>
            <h1>List of Petitions</h1>
        </div>
        <div class="petitionListContainer">
            @foreach($collection as $item)
            <li>
                <a>Petition Name:  {{$item->title}}</a>
                <a>Creator Name:  {{$item->name}}</a>
                <a>Description:  {{$item->info}}</a>
                <a>{{$item->id}}</a>
                <a>Number of signatures: </a>
                <a href={{"sign/".$item->id}}>Sign</a>
            </li>
            @endforeach
        </div>
    </main>
</div>
@endsection