@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div>
            <h1>Content Creators</h1>
        </div>
        <div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="petitionListContainer">
            @foreach($collection as $item)
            <li>
                <a>{{$item->title}}</a>
                <a>{{$item->creater}}</a>
                <a>{{$item->info}}</a>
            </li>
            @endforeach
        </div>
    </main>
</div>
@endsection