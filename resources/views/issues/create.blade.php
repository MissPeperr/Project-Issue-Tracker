@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>Create New Issue</h1>
            <form method="POST" action="/issues">
                @csrf
                <div class="field">
                    <label for="name">Issue Name:</label>
                    <div class="control">
                        <input class="input" type="text" name="name" id="name">
                    </div>
                </div>
                <div class="field">
                    <label for="description">Description:</label>
                    <div class="control">
                        <input class="input" type="text" name="description" id="description">
                    </div>
                </div>
                <button class="btn btn-success">Submit New Issue</button>
            </form>
        </div>
    </div>
</div>
@endsection