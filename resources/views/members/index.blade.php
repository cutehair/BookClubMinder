@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Members</h2>
  </div>
@endsection

@section('content')
  <div class="container">
    <ul>
      @forelse ($members as $member)
        <li>{{ $member->first_name . " " . $member->last_name }}</li>
      @empty
        <p>No members</p>
      @endforelse
    </ul>
  </div>
@endsection