@extends('public/home')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View all Players
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        @foreach ($players as $player)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $player -> playerFname}} {{ $player -> playerLname }}
                        </h5>
                        <a href="{{ route('players.edit', $player -> id)}}" class="card-link">Edit</a>
                        <a href="{{ route('players.trash', $player -> id)}}" class="card-link">Delete</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
</@endsection>