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
        border: 1px solid #c8b4e0; /* Light purple border */
    }

    .table {
        background-color: #f9f2f2; /* Soft light beige table background */
        border-collapse: collapse;
    }

    .table th {
        background-color: #e1bee7; /* Light lavender header for the table */
        color: #5d3a0e; /* Dark brown text */
        font-weight: bold;
    }

    .table td {
        border: 1px solid #c8b4e0; /* Light purple border */
        color: #4e3b31; /* Darker text for better contrast */
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
                    <strong>Data Program</strong>
                </div>
                <div class="pull-right">
                    <a href="programs/create" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Program</th>
                                <th>Class Level</th>
                                <th>Info</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($programs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->edulevel->name }}</td>
                                <td>{{ $item->info }}</td>
                                                            <td class="text-center d-flex justify-content-center">
                                <a href="{{ url('programs/'.$item->id) }}" class="btn btn-dark btn-sm mx-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('programs/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm mx-1">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url('programs/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete this data?')">
                                    @method('delete') 
                                    @csrf
                                    <button class="btn btn-danger btn-sm mx-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{ $programs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
