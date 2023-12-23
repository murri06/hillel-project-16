<x-layout>
    <a class="btn btn-secondary" href="/events">Back</a>
    @foreach($events as $event)
        <h1>{{$event->name}}</h1>
        <h3>Date:{{$event->date}}<br>Time: {{$event->time}}<br>Place: {{$event->place}}<br></h3>
        <h3>{{$event->description}}</h3>
    @endforeach
</x-layout>
