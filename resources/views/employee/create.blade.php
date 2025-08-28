@extends('layouts.app')
@section('title','Employee Create')
@section('content')
<div class="card-body">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Employee Create</h5>
    </div>
</div>
<form method="POST" name="employee_create" action="{{ url('/create') }}">
  @csrf
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Name <span class="text-danger">*</span></label>
      <input type="text" name="name" class="form-control" placeholder="Jane Doe">
    </div>

    <div class="col-md-6">
      <label class="form-label">Email <span class="text-danger">*</span></label>
      <input type="email" name="email" class="form-control" placeholder="jane@example.com">
    </div>

    <div class="col-md-6">
      <label class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" placeholder="+91 90000 00000">
    </div>

    <div class="col-md-6">
      <label class="form-label">Position</label>
      <input type="text" name="position" class="form-control" placeholder="Software Engineer">
    </div>
  </div>

  <div class="d-flex gap-2 mt-4">
    <button class="btn btn-primary px-4" type="submit">Create</button>
    <a href="{{ url('/list') }}" class="btn btn-outline-secondary">Cancel</a>
  </div>
</form>

@endsection
