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
                            {{ $player -> playerFname}} {{ $student -> playerLname }}
                        </h5>
                        <a href="{{ route('players.restore', $player -> id)}}" class="card-link">Restore</a>
                        <form action="{{ route('players.destroy', [$player -> id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button type="submit">Delete</button>
                        </form>

                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
</@endsection>