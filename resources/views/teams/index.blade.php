@extends('welcome')
@section('content')
<h2 class="display-3">
    Club List
</h2>
<div class="row">
    @foreach($teams as $team)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $team->teamName}}</h5>
                <p class="card-text">Country: {{ $team->country }}</p>
                <p class="card-text">Main color(s): {{ $team->teamColor }}</p>
                <p class="card-text">Founded in: {{ $team->yearFounded }}</p>
                <a href="{{ route('teams.edit', $team -> id ) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('teams.trash', $team -> id )}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
