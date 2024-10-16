@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="dashboard-content" style="background-color: #f7f0ff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #6a0dad;">Welcome to TutorIN!</h2>
            <p style="color: #636b6f;">
                TutorIN is your premier online platform for personalized tutoring in computer science and technology. 
                Whether you're just starting out or looking to deepen your understanding of advanced topics, TutorIN 
                offers a diverse array of <strong style="color: #6a0dad;">Computer Science Programs</strong> tailored to 
                enhance your learning experience. 
                Our programs cover fundamental concepts to specialized skills, ensuring that you receive the support 
                you need to thrive in the digital world.
            </p>
            <p style="color: #636b6f;">
                Discover our <strong style="color: #6a0dad;">Edu Class Levels</strong> to find the perfect match for 
                your academic and career goals. With expertly designed tutoring programs, we're dedicated to helping 
                you succeed in all aspects of your computer science education!
            </p>
        </div>
    </div>
</div>
@endsection
