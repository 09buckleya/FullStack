@extends('layouts.app')

@section('content')


<div class="container">
    <main>
        <div>
            <h1>Petition view page</h1>
        </div>
        <div>
            <div class="petitionListContainer">
                @foreach ($data as $item)
                <li>
                    <a>Petition Name: {{$item->title}}</a>
                    <a>Creator Name: {{$item->name}}</a>
                    <a>Description: {{$item->info}}</a>
                    <a>Number of signatures: {{$count}}</a>
                </li>
                @endforeach
            </div>
            <div><h1>List of signatures</h1></div>
            <div class="petitionListContainer">
                @foreach ($signatures as $item)
                <li>
                    <a>Signature: {{$item->name}}</a>
                </li>
                @endforeach
            </div>
        </div>
    </main>
</div>

@endsection