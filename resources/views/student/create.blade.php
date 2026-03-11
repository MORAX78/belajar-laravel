@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif
                <h5 class="card-title">{{ $title ?? '' }}</h5>
                <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="col-md-6 mb-3">
                <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="" disabled selected>-- Choose Your Gender --</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Image</label><br>
                    <img id="img-preview" src="{{ asset('assets/img/boy.png') }}" alt="" width="100">
                    <input type="file" id="image-input" name="image" class="form-control">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
