@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Free Plan -->
            <div class="col-md-4">
                <div class="card text-center bg-light border-info">
                    <div class="card-header bg-info text-white">
                        Free
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">0 Egyptian Pound / 7 Days</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Number of courses: 130</li>
                            <li class="list-group-item">Number of students: 10</li>
                            <li class="list-group-item">Number of lessons: 2</li>
                            <li class="list-group-item">Storage Space: 65</li>
                            <li class="list-group-item">Tests and Exams: 1</li>
                            <li class="list-group-item text-danger">Notifications: ✘</li>
                            <li class="list-group-item text-danger">Appear on homepage: ✘</li>
                            <li class="list-group-item text-danger">Appear on search: ✘</li>
                            <li class="list-group-item text-danger">Student statistics: ✘</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">Choose</a>
                    </div>
                </div>
            </div>
            <!-- Teacher Plan -->
            <div class="col-md-4">
                <div class="card text-center bg-light border-warning">
                    <div class="card-header bg-warning text-white">
                        Teacher
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">600 EGP / Monthly + 20 EGP for each student</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Number of courses: Unlimited</li>
                            <li class="list-group-item">Number of students: Unlimited</li>
                            <li class="list-group-item">Number of lessons: Unlimited</li>
                            <li class="list-group-item">Storage Space: 10</li>
                            <li class="list-group-item">Tests and Exams: Unlimited</li>
                            <li class="list-group-item text-success">Notifications: ✔</li>
                            <li class="list-group-item text-success">Appear on homepage: ✔</li>
                            <li class="list-group-item text-success">Appear on search: ✔</li>
                            <li class="list-group-item text-danger">Student statistics: ✘</li>
                        </ul>
                        <a href="#" class="btn btn-warning mt-3">Choose</a>
                    </div>
                </div>
            </div>
            <!-- Centers Plan -->
            <div class="col-md-4">
                <div class="card text-center bg-light border-success">
                    <div class="card-header bg-success text-white">
                        Centers
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">1200 EGP / Monthly + 20 EGP for each student</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Number of courses: Unlimited</li>
                            <li class="list-group-item">Number of students: Unlimited</li>
                            <li class="list-group-item">Number of lessons: Unlimited</li>
                            <li class="list-group-item">Storage Space: 30</li>
                            <li class="list-group-item">Tests and Exams: Unlimited</li>
                            <li class="list-group-item text-success">Notifications: ✔</li>
                            <li class="list-group-item text-success">Appear on homepage: ✔</li>
                            <li class="list-group-item text-success">Appear on search: ✔</li>
                            <li class="list-group-item text-success">Student statistics: ✔</li>
                        </ul>
                        <a href="#" class="btn btn-success mt-3">Choose</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
