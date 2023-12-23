<x-layout>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Date and time</th>
            <th>Place</th>
            <th>Description</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td><a href="/events/{{$event->id}}">{{$event->name}}</a></td>
                <td>{{$event->date . ' ' . $event->time}}</td>
                <td>{{$event->place}}</td>
                <td>{{$event->description}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
