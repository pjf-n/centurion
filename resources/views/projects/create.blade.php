@extends('layout')

@section('title', 'Contact')

@section('Content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Projects an that</h1>

                <form method="POST" action="/projects">

                    {{ csrf_field() }}

                    <div>

                        <input type="text" name="title" placeholder="Project Title">

                    </div>

                    <div>
                        <input type="text" name="description" placeholder="Project Description">
                    </div>

                    <div>
                        <button type="submit">Create Project</button>
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection