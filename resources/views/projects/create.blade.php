@extends('layout')

@section('content')
       
        <h1 class="title" style="margin-top: 1em">Create a New Project</h1>


        <form action="/projects" method="post">
            {{ csrf_field() }}

            <!-- title -->
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" id="" placeholder="Title"  autofocus  value = "{{ old('title') }}">
                </div>
            </div>


            <!-- description -->
            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                        <textarea name="description" id="" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="provide the project's description">{{ old('description') }}</textarea>
                </div>
            </div>

            <!-- submit -->
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-success">Add Project</button>
                </div>
            </div>         

            {{-- showing errors --}}
            @include('errors')


        </form>

@endsection
