@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <!-- title -->
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input type="text" name="title" class="input" id="" placeholder="Title" value="{{ $project->title }}" autofocus>
            </div>
        </div>

       <!-- description -->
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                    <textarea name="description" id="" class="textarea" >  {{ $project->description }} </textarea>
            </div>
        </div>

       <!-- submit -->
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-success">Update Project</button>
            </div>
        </div>       
    </form>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('Delete')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit"  class="button is-danger">Delete Project</button>
            </div>
        </div>
    </form>
@endsection