<x-layout>
    <a class="btn btn-secondary" href="/users">Back</a>
    @foreach($users as $user)
        <h1>{{$user->name}}</h1>
        <h3>{{$user->email}}</h3>
    @endforeach
</x-layout>
