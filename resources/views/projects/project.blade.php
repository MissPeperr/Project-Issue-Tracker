@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="project_list-header">
                <h1>{{$project->name}}</h1>
                <div>
                    <a href="{{ route('projects') }}">
                        <button class="btn btn-success">👈 Back to All Projects</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary"> ➕ Create New Issue</button>
                    </a>
                </div>
            </div>
            <div>
                @foreach ($statuses as $status)
                <div class="card col-md-8">
                    <h3>{{$status->name}}</h3>

                    @foreach ($issues as $issue)

                    @if ((int)$issue->status_id === $status->id)
                    <div class="issue_card card">
                        <h3>{{$issue->name}}</h3>

                        {{-- TODO: make buttons change the status of issues --}}
                        @if ($status->id === 1)
                        <button class="btn btn-secondary">Move to Todo</button>

                        @elseif ($status->id === 2)
                        <button class="btn btn-secondary">Move to In Progress</button>

                        @elseif ($status->id === 3)
                        <button class="btn btn-secondary">Move to Testing</button>

                        @elseif ($status->id === 4)
                        <button class="btn btn-secondary">Move to Completed</button>

                        @endif

                    </div>
                    @endif

                    @endforeach

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection