@extends('public/home')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Update Team Info</h1>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('teams.update', $team -> id) }}" method="PUT">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            {{ csrf_field() }}
            <div class="mb-3">
          <label for="teamName" class="form-label">Team Name</label>
          <input type="text" class="form-control" name="teamName" id="teamName" aria-describedby="teamName">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" name="country" id="country" aria-describedby="country">
          </div>
          <div class="mb-3">
            <label for="teamColor" class="form-label">Team Color(s)</label>
            <input type="text" class="form-control" name="teamColor" id="teamColor"  aria-describedby="teamColor">
          </div>
          <div class="mb-3">
            <label for="yearFounded" class="form-label">Year Founded</label>
            <input type="number" class="form-control" name="yearFounded" id="yearFounded"  aria-describedby="yearFounded">
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
