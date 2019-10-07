@extends('layout')

@section('Content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>{{  $project->title  }} Show Page</h2>


                <div class="field">

                    <label for="title" class="label">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
                    </div>

                </div>

                <div class="field">

                    <label for="description" class="label">Description</label>

                    <div class="control">
                        <textarea name="description" class="textarea">{{ $project->description }}</textarea>
                    </div>

                </div>


            <a href="/projects/{{ $project->id  }}/edit" class="is-link button">Edit Project</a>

        </div>
    </div>
</div>


@endsection