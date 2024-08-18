@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Update Player Info</h1>
        </div>
    </div>

    <div class="row">
        <form action="{{ route(teams.update', $team -> id) }}" method="PUT">
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
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" value="{{ $player -> playerFname}}">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" value="{{ $player -> playerLname}}">
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" id="position"  aria-describedby="position" value="{{ $player -> position}}">
          </div>
          <div class="mb-3">
            <label for="jerseyNO" class="form-label">JerseyNO</label>
            <input type="number" class="form-control" name="jerseyNO" id="jerseyNO"  aria-describedby="jerseyNO" value="{{ $player -> jerseyNO}}">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" name="teamID" for="team_id">Teams</label>
            </div>
                    <select class="custom-select" name="teamID" id="teamID">
                        @foreach ($teams as $team)
                        @if ($player -> teamID == $team ->id)
                        <option selected value="{{$team->id}}">{{ $team->teamName }} {{ $team->country }}</option>
                        @else{
                        <option value="{{$team->id}}">{{ $team->teamName }} {{ $team->country }}</option>
                        }
                        @endif
                        @endforeach
                    </select>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection