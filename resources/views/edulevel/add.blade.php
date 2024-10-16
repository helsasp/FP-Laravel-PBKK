@extends('main')

@section('title', 'Class level')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Class level</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Class level</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<style>
    body {
        background-color: #f3e5f5; /* Light purple background */
        font-family: Arial, sans-serif;
    }

    .card {
        background-color: #ffffff; /* White card background */
        border: 1px solid #d1c4e9; /* Light purple border */
    }

    .card-header {
        background-color: #7e57c2; /* Dark purple header */
        color: #ffffff; /* White text */
    }

    .form-control {
        border-color: #ab47bc; /* Purple border for input fields */
        color: #4e3b31; /* Darker text for better contrast */
    }

    .form-control.is-invalid {
        border-color: #e53935; /* Red border for invalid fields */
    }

    .btn-success {
        background-color: #7e57c2; /* Purple button */
        border-color: #7e57c2; /* Same purple border */
        color: white; /* White text */
    }

    .btn-secondary {
        background-color: #ab47bc; /* Light purple button for Back */
        color: #ffffff; /* White text */
    }

    .alert {
        background-color: #e1bee7; /* Light alert background */
        color: #6a1b9a; /* Darker text for alert */
    }

    .invalid-feedback {
        color: #f44336; /* Red text for validation errors */
    }
</style>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Add Class Level</strong>
                </div>
                <div class="pull-right">
                    <a href="/edulevels" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="/edulevels" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Class Level</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                                @error('name')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
                                @error('desc')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <!-- Additional content can go here if needed -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
