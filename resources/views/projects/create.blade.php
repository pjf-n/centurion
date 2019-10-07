@extends('layout')

@section('title', 'Contact')

@section('Content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-5">Create a project</h1>

                <form method="POST" action="/projects">

                    @csrf

                    <div class="field">

                        <label for="title" class="label">Title</label>

                        <div class="control">
                            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Title" value="{{ old('title') }}" >
                        </div>

                    </div>

                    <div class="field">

                        <label for="description" class="label">Description</label>

                        <div class="control">
                            <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Description">{{ old('description') }}</textarea>
                        </div>

                    </div>

                    <div class="field">

                        <div class="control">

                            <button type="submit" class="is-link button">Create Project</button>

                        </div>

                    </div>

                </form>

                @if( $errors->any())

                    <div class="notification is-danger">

                        <ul>

                        @foreach( $errors->all() as $error )

                            <li>{{ $error }}</li>

                        @endforeach

                        </ul>

                    </div>

                @endif

            </div>
        </div>
    </div>


@endsection