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
                <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required value="{{ $student->name }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required value="{{ $student->email }}">
                </div>
                <div class="col-md-6 mb-3">
                <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="" disabled>-- Choose Your Gender --</option>
                        <option value="1" {{ $student->gender == 1 ? 'selected' : '' }}>Male</option>
                        <option value="2" {{ $student->gender == 2 ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone" value="{{ $student->phone }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" value="{{ $student->address }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Image</label><br>
                    @if($student->image)
                    <img src="{{ asset('uploads/students/'.$student->image) }}" width="100" class="mb-2">
                    @endif
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
