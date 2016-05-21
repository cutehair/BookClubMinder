@inject('states', 'BookClubMinder\Http\Utilities\States')
@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Members</h2>
    <h3>Create a new member</h3>
  </div>
@endsection

@section('content')
  <form method="POST" action="/members">
    <div class="container">
     <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
      </div>
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}">
      </div>
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
      </div>
      <div class="form-group">
        <label for="street_address">Street Address</label>
        <input type="text" name="street_address" id="street_address" class="form-control" value="{{ old('street_address') }}">
      </div>
      <div class="form-group">
        <label for="suite_apt">Suite, Apartment, Other</label>
        <input type="text" name="suite_apt" id="suite_apt" class="form-control" value="{{ old('suite_apt') }}">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <select name="state" id="state" class="form-control">
          @foreach ($states->all() as $name => $abbrev)
            <option value="{{ $abbrev }}">{{ $name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="zip">Zip Code</label>
        <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
      </div>
      <div class="form-group">
        <label for="phone_number">Primary Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}">
      </div>
      <div class="form-group">
        <label for="other_phone">Alternate Phone Number</label>
        <input type="text" name="other_phone" id="other_phone" class="form-control" value="{{ old('other_phone') }}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Create This Member</button>
      </div>
    </div>
    </form>
  </div>
@endsection