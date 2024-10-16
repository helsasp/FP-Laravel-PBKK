@extends('main')

@section('title', 'Program')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Program</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Program</a></li>
                    <li class="active">Edit</li>
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

    .form-group label {
        color: #4e3b31; /* Darker text for labels */
    }

    .form-control {
        border-color: #ab47bc; /* Purple border for input fields */
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
</style>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Program</strong>
                </div>
                <div class="pull-right">
                    <a href="/programs" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('programs/'. $program->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Nama Program</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $program->name) }}">
                                @error('name')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Class Level</label>
                                <select name="edulevel_id" class="form-control @error('edulevel_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach($edulevels as $item)
                                    <option value="{{ $item->id }}" {{ old('edulevel_id', $program->edulevel_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('edulevel_id')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga Member</label>
                                <input type="number" name="student_price" class="form-control @error('student_price') is-invalid @enderror" value="{{ old('student_price', $program->student_price) }}">
                                @error('student_price')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Maksimal Member</label>
                                <input type="number" name="student_max" class="form-control @error('student_max') is-invalid @enderror" value="{{ old('student_max', $program->student_max) }}">
                                @error('student_max')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea name="info" class="form-control @error('info') is-invalid @enderror">{{ old('info', $program->info) }}</textarea>
                                @error('info')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
                <div class="card-body table-responsive"></div>
            </div>
        </div>
    </div>
</div>
@endsection
