@extends('layouts.admin')

@section('title', 'Show Laundry')
@section('content-header', 'Show Laundry')

@section('content')

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <img width="200" src="{{$product->getImg()}}" alt="">
                </div>

                <div class="form-group">
                    <label>Name : </label>
                    {{$product->name}}
                </div>

                <div class="form-group">
                    <label>Description : </label>
                    {{$product->description}}
                </div>

                <div class="form-group">
                    <label>Barcode : </label>
                    {{$product->barcode}}
                </div>

                <div class="form-group">
                    <label for="">Price : </label>
                    {{$product->price}}
                </div>

                <div class="form-group">
                    <label for="">Quantity(kg) : </label>
                    {{$product->quantity}}
                </div>

                <div class="form-group">
                    <label for="">Status : </label>
                    @if($product->status==1) Active @else Inactive @endif
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-info" type="submit">Back</a>
        </div>
    </div>
@endsection
