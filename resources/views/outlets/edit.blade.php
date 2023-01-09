@extends('layouts.admin')

@section('title', 'Update Outlet')
@section('content-header', 'Update Outlet')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('outlets.update', $outlet) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="outlet_name">Outlet Name</label>
                    <input type="text" name="outlet_name" class="form-control @error('outlet_name') is-invalid @enderror"
                           id="outlet_name"
                           placeholder="Outlet Name" value="{{ old('outlet_name', $outlet->outlet_name) }}">
                    @error('outlet_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hotline">Hotline</label>
                    <input type="text" name="hotline" class="form-control @error('hotline') is-invalid @enderror"
                           id="hotline"
                           placeholder="Hotline" value="{{ old('hotline', $outlet->hotline) }}">
                    @error('hotline')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           placeholder="Email" value="{{ old('email', $outlet->email) }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                           id="address"
                           placeholder="Address" value="{{ old('address', $outlet->address) }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
