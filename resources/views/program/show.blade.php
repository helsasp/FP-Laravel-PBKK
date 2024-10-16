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
                    <li><a href="">Data</a></li>
                    <li class="active">Detail</li>
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

    .table {
        background-color: #f9f2f2; /* Soft light beige table background */
    }

    .table th {
        background-color: #d1c4e9; /* Light lavender header for the table */
        color: #4e3b31; /* Darker text */
        font-weight: bold;
    }

    .table td {
        color: #4e3b31; /* Darker text for better contrast */
    }

    .btn-default {
        background-color: #ab47bc; /* Purple button for Back */
        color: #ffffff; /* White text */
    }

    .alert {
        background-color: #e1bee7; /* Light alert background */
        color: #6a1b9a; /* Darker text for alert */
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
                    <strong>Detail Program</strong>
                </div>
                <div class="pull-right">
                    <a href="/programs" class="btn btn-default btn-sm">
                        <i class="fa fa-plus"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Class Level</th>
                                    <td>{{ $program->edulevel->name }}</td>
                                </tr>
                                <tr>
                                    <th>Program</th>
                                    <td>{{ $program->name }}</td>
                                </tr>
                                <tr>
                                    <th>Student Price</th>
                                    <td>{{ $program->student_price }}</td>
                                </tr>
                                <tr>
                                    <th>Student Max</th>
                                    <td>{{ $program->student_max }}</td>
                                </tr>
                                <tr>
                                    <th>Info</th>
                                    <td>{{ $program->info }}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{ $program->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
