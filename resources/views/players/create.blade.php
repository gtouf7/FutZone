@extends('players.index')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Player
            </h1>
        </div>
    </div>
    <div class="row">
      <form method="POST" action="{{ route('players.store') }}">
      @if ($errors -> any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

        {{ csrf_field() }}
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname">
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" id="position"  aria-describedby="position">
          </div>
          <div class="mb-3">
            <label for="jerseyNO" class="form-label">JerseyNO</label>
            <input type="number" class="form-control" name="jerseyNO" id="jerseyNO"  aria-describedby="jerseyNO">
          </div>
          <div class="mb-3">
            <label for="teamID" class="form-label">Teams</label>
            <select name="teamID" id="teamID">
                @foreach ($teams as $team)
                    <option value="{{ $team -> id }}">{{ $team -> teamName }}</option>
                @endforeach
            </select>
            
          </div>
        <button type="submit" class="btn btn-primary">Add Player</button>
      </form>
    </div>
@endsection
