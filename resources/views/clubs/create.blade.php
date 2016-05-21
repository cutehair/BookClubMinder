@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Clubs</h2>
    <h3>Create a new club</h3>
  </div>
@endsection

@section('content')
  <form method="POST" action="/clubs">
    <div class="container">
      <div class="form-group">
        <label for="name">Club Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
      </div>
      <div class="form-group">
        <label for="tagline">Tagline (or short description)</label>
        <input type="text" name="tagline" id="tagline" class="form-control" value="{{ old('tagline') }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" rows="3">
        </textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Create My Club</button>
      </div>
    </div>
  </form>
@endsection