@extends('layout')

@section('Content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>{{  $project->title  }}</h2>
            <form action="/projects/{{ $project->id }}" method="POST">

                {{ method_field('PATCH') }}

                @csrf

                <div class="field">

                    <label for="title" class="label">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
                    </div>

                </div>

                <div class="field">

                    <label for="description" class="label">Description</label>

                    <div class="control">
                        <textarea name="description" class="textarea" value="{{ $project->description }}"></textarea>
                    </div>

                </div>

                <div class="field">

                    <div class="control">

                        <button type="submit" class="is-link button">Update Project</button>

                    </div>

                </div>

            </form>

            <form action="/projects/{{ $project->id }}" method="POST">

                {{ method_field('DELETE') }}

                @csrf

                <div class="field">

                    <div class="control">

                        <button type="submit" class="is-link button is-danger">Delete Project</button>

                    </div>

                </div>

            </form>

        </div>
    </div>
</div>


@endsection