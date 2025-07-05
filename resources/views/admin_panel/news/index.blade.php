@extends('components.admin_layout')

@section('content')
<?php $index = $numOfDataOnPage * ($data->currentPage() - 1) + 1;?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>News</h3>
                        <div class="d-flex">
                            <a href="{{route('news.create')}}" class="btn btn-primary my-2">Add News</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="entries" class="me-2">Show</label>
                            <select id="entries" class="form-select form-select-sm d-inline-block w-auto">
                                <option value="{{route('news.index', ['entries'=>5])}}">5</option>
                                <option value="{{route('news.index', ['entries'=>25])}}">25</option>
                                <option value="{{route('news.index', ['entries'=>50])}}">50</option>
                                <option value="{{route('news.index', ['entries'=>100])}}">100</option>
                            </select>
                            <span class="">entries</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label for="search" class="me-2 mb-0">Search: </label>
                            <form action="{{route('news.search')}}" method="GET">
                                @csrf
                                <input name="numOfDataOnPage" type="number" value="{{$numOfDataOnPage}}" hidden>
                                <div class="d-flex align-items-center">
                                    <input id="search" name="search" type="text" class="form-control form-control-sm">
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary my-2 mx-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <style>
                        table {
                            border-collapse: collapse;
                        }
                        table th,
                        table tr,
                        table td {
                            border: 1px solid #ddd;
                        }
                        td {
                            padding: 10px;
                        }
                        tr.bg-amber-500 {
                            border: 1px solid #ddd;
                            background-color: azure;
                            color: white;
                        }
                        .arrow-image {
                            padding-right: 10px;
                        }
                    </style>
                    <table class="table table-hover text-center align-middle">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>
                                    <div class="btn-group dropstart">
                                        <i class="fas fa-ellipsis-v" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        </i>
                                        <ul class="dropdown-menu me-3">
                                            <li><a class="dropdown-item"
                                                    href="{{route('news.edit', $item->id)}}">Edit</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('news.show', $item->id)}}">Show</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item" name="{{$item->id}}"
                                                    data-bs-toggle="delete-buttons"
                                                    data-bs-target="deleteButton_{{$item->id}}">Delete</button>
                                            </li>
                                            <form hidden id="deleteButton_{{$item->id}}"
                                                action="{{route('news.delete', $item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Hidden delete button</button>
                                            </form>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<script>
    swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "{{$errors->all()[0]}}",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            reverseButtons: true
        });
</script>
@endif
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success me-3",
            cancelButton: "btn btn-danger me-3"
        },
        buttonsStyling: false
    });
    function addPopUpToDeleteButtons(deleteButtons) {
        deleteButtons.forEach(myButton => {
            myButton.addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "This action is irrevertible",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    var targetButton = document.getElementById(myButton.getAttribute('data-bs-target'));
                    console.log(targetButton);
                    targetButton.submit();
                }
            });
            });
        });
    }
    const allDeletebuttons = document.querySelectorAll('[data-bs-toggle="delete-buttons"]');
    addPopUpToDeleteButtons(allDeletebuttons);

    const entriesSelection = document.getElementById('entries');
    entriesSelection.value = "{{route('news.index', ['entries'=>$numOfDataOnPage])}}";
    entriesSelection.addEventListener('change', function () {
        const selectedValue = this.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    });
    @session("deletion-success")
        Swal.fire({
            title: "Success",
            text: "{{session('deletion-success')}}",
            icon: "success"
        });
    @endsession
    @session("deletion-error")
            Swal.fire({
            title: "Error!",
            text: "{{session('deletion-error')}}",
            icon: "error"
            });
            @endsession
    @session("creation-success")
        Swal.fire({
            title: "Success",
            text: "{{session('creation-success')}}",
            icon: "success"
        });
    @endsession
    @session("edition-success")
        Swal.fire({
            title: "Success",
            text: "{{session('edition-success')}}",
            icon: "success"
        });
    @endsession
</script>
@endsection
