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


            @if ($project->tasks->count())

            <h2 class="text-center">Tasks</h2>

            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        @foreach($project->tasks as $task)


                            <form action="/tasks/{{ $task->id }}" method="post">

                                @method('PATCH')
                                @csrf

                                <label for="completed" class="checkbox">

                                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} >
                                        {{ $task->description }}

                                </label>


                            </form>



                        @endforeach
                    </div>
                </div>
            </div>

            @endif


            <a href="/projects/{{ $project->id  }}/edit" class="is-link button">Edit Project</a>

        </div>
    </div>
</div>


@endsection