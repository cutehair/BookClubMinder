@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Clubs</h2>
  </div>
@endsection

@section('content')
  <div class="container">
    <ul>
      @forelse ($clubs as $club)
        <li>{{ $clubs->name }}</li>
      @empty
        <p>No clubs</p>
      @endforelse
    </ul>
  </div>
@endsection