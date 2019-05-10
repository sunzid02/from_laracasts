@extends('layout')

@section('content')

    <h1 class="title"> {{ $project->title }} </h1>

    <div class="content">
        {{ $project->description }}
        <!-- edit link -->
        <a href="/projects/{{ $project->id }}/edit">
            <p>
                Edit
            </p>
        </a>
    </div>



    <!-- show tasks -->
    @if( $project->tasks->count() )
        <div class="box">

            @foreach( $project->tasks as $task)
                <div> 
                   
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        
                        @method('PATCH')
                        @csrf

                        <label class="checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                           {{ $task->description }} 
                        </label>

                    </form>

                </div>
            @endforeach

        </div>
    @endif

    <!-- add a new task -->
    <form action="/projects/{{ $project->id }}/tasks" method="POST" style="margin-top: 1em" class="box">
        @csrf
        {{-- new task field --}}
        <div class="field">
            <label for="description" class="class"> New Task</label>
            <div class="control">
                <input type="text" name="description" id="description" class="input" placeholder="New Task">
            </div>
        </div>
        
        {{-- submit --}}
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-success">Add Task</button>
            </div>
        </div>

        

    </form>

    @include('errors')

@endsection