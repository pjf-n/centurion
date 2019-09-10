@extends('layout')

@section('title', 'Contact')

@section('Content')

    <h1>Projects an that</h1>

    @foreach($projects as $project)

        <li>{{ $project->title }}</li>

    @endforeach

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque aut delectus eaque et exercitationem incidunt itaque, maxime necessitatibus nulla quasi qui quia reiciendis sed soluta unde velit vero voluptas?
    </p>

@endsection