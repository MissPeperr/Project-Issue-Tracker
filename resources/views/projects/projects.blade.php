@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="project_list-header">
                <h1>Projects</h1>
                <a href="{{ route('projects.create') }}"><button class="btn btn-primary">Create New Project</button></a>
            </div>
            <div class="col-md-6">
                @if (count($projects) < 1) <h2>You don't have any projects!</h2>
                    @else
                    @foreach ($projects as $project)
                    <div class="project_card card">
                        <h3>{{$project->name}}</h3>
                        <a href="{{ route('projects.show', ['project_id' => $project->id]) }}">
                            <button class="btn btn-secondary">View Issues</button>
                        </a>
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection