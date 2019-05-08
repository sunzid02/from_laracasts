@extends('layout')

@section('content')

    <h1 class="title"> {{ $project->title }} </h1>

    <div class="content">
        {{ $project->description }}
    </div>

    <!-- edit link -->
    <a href="/projects/{{ $project->id }}/edit">
        <p>
            Edit
        </p>
    </a>

@endsection