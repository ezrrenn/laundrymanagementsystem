@extends('layouts.admin')

@section('title', 'Show Outlet')
@section('content-header', 'Show Outlet')

@section('content')

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <label for="outlet_name">Outlet Name : </label>
                    {{$outlet->outlet_name}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Hotline : </label>
                    {{$outlet->hotline}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Email : </label>
                    {{$outlet->email}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Address : </label>
                    {{$outlet->address}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Created By : </label>
                    {{$user->first_name}} {{$user->last_name}}
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-info" type="submit">Back</a>
        </div>
    </div>
@endsection
