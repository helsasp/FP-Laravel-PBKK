@extends('main')

@section('title', 'Class Level')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Class Level</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Class Level</a></li>
                    <li class="active">Data</li>
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
        border: 1px solid #d1c4e9; /* Softer purple border */
    }

    .table {
        background-color: #f9f2f2; /* Soft light beige table background */
        border-collapse: collapse;
    }

    .table th {
        background-color: #e1bee7; /* Softer purple header for the table */
        color: #4a148c; /* Dark purple text */
        font-weight: bold;
    }

    .table td {
        border: 1px solid #d1c4e9; /* Softer purple border */
        color: #6a1b9a; /* Darker text for better contrast */
    }

    .btn-success {
        background-color: #4caf50; /* Green button */
    }

    .btn-primary {
        background-color: #2196F3; /* Blue button */
    }

    .btn-danger {
        background-color: #f44336; /* Red button */
    }

    .alert {
        background-color: #e8f5e9; /* Light alert background */
        color: #2e7d32; /* Darker text for alert */
    }
</style>

<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Class Level</strong>
                </div>
                <div class="pull-right">
                    <a href="edulevels/add" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($edulevels as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->desc }}</td>
                                                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('edulevels/edit/'.$item->id) }}" class="btn btn-primary btn-sm mx-1"> <!-- Increased margin-end -->
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url('edulevels/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete this data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm mx-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
