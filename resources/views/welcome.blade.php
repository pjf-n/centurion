@extends('layout')

@section('title', 'Home')

@section('Content')

<h1>Homepage {{ $foo }}</h1>

    <ul>
        @foreach($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach
    </ul>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque aut delectus eaque et exercitationem incidunt itaque, maxime necessitatibus nulla quasi qui quia reiciendis sed soluta unde velit vero voluptas?
</p>

@endsection