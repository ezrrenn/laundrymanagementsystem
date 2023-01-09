@extends('layouts.admin')

@section('title', 'Show Customer')
@section('content-header', 'Show Customer')

@section('content')

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <label>First Name : </label>
                    {{$customer->first_name}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Last Name : </label>
                    {{$customer->last_name}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Email : </label>
                    {{$customer->email}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Phone : </label>
                    {{$customer->phone}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Address : </label>
                    {{$customer->address}}
                </div>

                <div class="form-group">
                    <label for="outlet_name">Avatar : </label>
                    <img width="200" src="{{$customer->getAvatarUrl()}}" alt="">
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-info" type="submit">Back</a>
        </div>
    </div>
@endsection
