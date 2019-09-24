@extends('layout')

@section('Content')

<h2>{{  $project->title  }}</h2>

<form action="/projects/{{ $project->id }}" method="POST">

    {{ method_field('PATCH') }}

    @csrf

    <div class="field">

        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>

    </div>

    <div class="field">

        <label for="description" class="label">Description</label>

        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>

    </div>

    <div class="field">

        <div class="control">

            <button type="submit" class="is-link button">Update Project</button>

        </div>

    </div>

</form>

@endsection