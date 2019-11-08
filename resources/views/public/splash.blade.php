@extends('layouts.app')
<!-- This section creates the content for the landing page

We should ask for location permission on the first load only before we generate the map
If permission is not granted we need generic, random data for the map

It should have a search function
    We use location data for the search. We have some inputs for the location/date to find events elsewhere.
    DATE, ZIP and radious would be good to start.
    Default is a nearby/search displaying results for up to a month in the future
    Provide a drawer for the search options
Below that should be some kind of graphic that shows nearby user events
    It woulod be nice if this looked like a lake with fish swimming in it or planets/space
    Each planet/fish can be clicked on to go to the event, sizes depend on attendees
Below that should be some cards with marketing
Sidebar can be to highlight events for people who want front page exposure -->
@section('content')
<div>This is the splash page</div>
{{-- Get date and current location
query database for events happening soon that are close by
create objects that represent those events
make those objects a link to the event pages
Show events in an artsy graphic  --}}
    
@endsection