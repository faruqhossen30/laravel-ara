@extends('backend.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{route('package.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="mb-3">
                        <label for="forName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="forName" autocomplete="off" placeholder="Name">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Day</label>
                            <select name="day_id" class="form-select form-select-sm mb-3">
                                <option selected>Select day</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Service Type</label>
                            <select name="type" class="form-select form-select-sm mb-3">
                                <option selected>Select type</option>
                                <option value="install">Install</option>
                                <option value="review">Review</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="forPrice" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="forPrice" autocomplete="off" placeholder="Price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    Searvice List
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        {{-- <label for="forName" class="form-label">Name</label> --}}
                                        <div class="col-md-10">
                                            <input type="text" name="serviceinput" class="form-control" id="forName" autocomplete="off" placeholder="Service details">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary btn-sm btn-sm btn-icon-tex" id="addButton">
                                                {{-- <i class="btn-icon-prepend" data-feather="check-square"></i> --}}
                                                Add Service</button>
                                        </div>
                                    </div>

                                    {{-- <h6 class="card-title mb-3">Searvice List</h6> --}}
                                    <ul class="list-group" id="simple-list">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@push('plugin-styles')
<!-- Plugin css import here -->
@endpush

@section('content')
<!-- Page content here -->
@endsection

@push('plugin-scripts')
<!-- Plugin js import here -->
<script src="{{ asset('assets/plugins/sortablejs/Sortable.min.js') }}"></script>
@endpush

@push('custom-scripts')
<!-- Custom js here -->
<script src="{{ asset('assets/js/sortablejs.js') }}"></script>
<script>
    $(document).ready(function(){
        let num = 0;
        $(document).on('click', '#addButton', function(){
            num++;
            let service = $('input[name="serviceinput"]').val();
            $('#simple-list').append(`
            <li class="list-group-item d-flex justify-content-between">${num} - ${service}
                <input type="hidden" name="service[]" value="${service}">
                <span class="badge bg-danger rounded-pill close-icon cursor-pointer">x</span>
                </li>
            `);
            $('input[name="serviceinput"]').val('')
        });

        $(document).on('click', '.close-icon', function(){
            $(this).parent().remove();
        });


    });
</script>
@endpush
