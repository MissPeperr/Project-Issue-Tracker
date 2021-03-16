@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>Create a new Project</h1>
            <form method="POST" action="/projects">
                @csrf
                <div class="field">
                    <label for="name">Project Name:</label>
                    <div class="control">
                        <input class="input" type="text" name="name" id="name">
                    </div>
                </div>
                <button class="btn btn-success">Submit New Project</button>
            </form>
        </div>
    </div>
</div>
@endsection