@extends('layouts.app')
@section('title', 'List Of Tasks')

@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}"
    class="link"
    >
        Create Task
    </a>
</nav>
<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                @class(['font-bold','line-through' => $task->completed])    
            >
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>No Tasks in the list</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
</div>
@endsection
