@extends('admin.layout.master')
@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 offset-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Slider Image</h6>
                    <span class="text-muted my-1">Image size must be 375x668</span>
                    <input type="file" id="myDropify" name="thumbnail">
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
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <!-- Page content here -->
@endsection

@push('plugin-scripts')
  <!-- Plugin js import here -->
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <!-- Custom js here -->
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
@endpush
