@extends('components.admin_layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Dashboard</h4>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text display-6">{{ $userCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">News</h5>
                        <p class="card-text display-6">{{ $newsCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notes</h5>
                        <p class="card-text display-6">{{ $notesCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sports</h5>
                        <p class="card-text display-6">{{ $sportCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text display-6">{{ $aboutCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <p class="card-text display-6">{{ $contactCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
