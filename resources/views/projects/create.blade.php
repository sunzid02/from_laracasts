@extends('layout')

@section('content')
       
        <h1>Create a New Project</h1>

        <form action="/projects" method="post">
            {{ csrf_field() }}
            <!-- project title -->
            <div class="control">
                <input type="text" name="title" id="" placeholder="Project Title">
            </div>

            <!-- project description -->
            <div>
                <textarea name="description" id="" cols="30" rows="10" placeholder="give a description"></textarea>
            </div>

            <!-- submission -->
            <div>
                <button type="submit">Create Project</button>
            </div>
        </form>

@endsection
