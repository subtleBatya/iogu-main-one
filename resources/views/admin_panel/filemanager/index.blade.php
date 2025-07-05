@extends('components.admin_layout')

@section('title', 'File Manager')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-6">
                    <div class="card-body pt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>File Manager</h3>
                            <div>
                                <a href="{{ route('backup') }}" class="btn btn-warning">Backup Now</a>
                            </div>
                        </div>
                        <div id="elfinder" style="height: 600px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('packages/barryvdh/elfinder/css/elfinder.full.css') }}">

    <!-- Include jQuery and jQuery UI (required by elfinder) -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>


    <!-- Include elfinder CSS and JS -->
    <script src="{{ asset('packages/barryvdh/elfinder/js/elfinder.full.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#elfinder').elfinder({
                url: '{{ route('elfinder.connector') }}', // connector URL (Set this to your connector route)
                resizable: false,
                height: 600,
                width: '100%',
                baseUrl: '/packages/barryvdh/elfinder/',
                cssAutoLoad: true,
                theme: 'default',
            });
        });

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        @endif
    </script>

    <!-- Include SweetAlert2 for consistency, if needed -->
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
@endsection
