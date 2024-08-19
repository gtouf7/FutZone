@extends('public/home')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View all Teams
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        @foreach ($teams as $team)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $team -> teamName}}
                        </h5>
                        <a href="{{ route('teams.restore', $team -> id)}}" class="card-link">Restore</a>
                        <form action="{{ route('teams.destroy', [$teams -> id]) }}" method="POST">
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
