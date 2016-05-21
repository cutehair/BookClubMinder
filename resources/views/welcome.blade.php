@extends('layouts.app')

@section('header')
    <div class="container">
        <h2>Welcome to the Book Club Minder</h2>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <div class="well">
                <h3>Mind your Members</h3>
                <p>Book Club Minder allows you to keep track of all members, including roles such as leader or host. Depending upon your club privacy settings, you can show information such as email adddress, phone number, even a location - helpful if a member is hosting a meeting!</p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="well">
                <h3>Mind your Meetings</h3>
                <p>Book Club Minder keeps a record of all meetings, not just the date and time, but the reading selection, suggested questions, meeting location - even who's bringing refreshments!</p>
                <p>You can even have a reMinder email or text sent so you don't miss a meeting!</p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="well">
                <h3>Mind your Books</h3>
                <p>In addition to keeping track of reading assignments for the next meeting, Book Club Minder allows you to mind the author information, publication information, even which edition - including ebooks - the club is reading.</p>
                <p>And when its time to think about the next book, you can suggest books and poll the suggestions - all online!</p>
            </div>
        </div>
    </div>
</div>
@endsection
