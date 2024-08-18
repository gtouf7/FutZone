@extends('welcome')
@section('content')
<h2 class="display-3">
    CLub List
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
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
