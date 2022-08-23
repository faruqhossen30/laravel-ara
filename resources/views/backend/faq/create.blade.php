@extends('backend.layout.master')
@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Faq</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form action="{{route('faq.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
          <div class="mb-3">
            <label for="forName" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" autocomplete="off" placeholder="title">
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputPhoto" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="description" >
          </div> --}}
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="description" rows="8"></textarea>
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
@endpush

@push('custom-scripts')
  <!-- Custom js here -->
@endpush
