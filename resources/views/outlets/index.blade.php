@extends('layouts.admin')

@section('title', 'Outlet List')
@section('content-header', 'Outlet List')
@section('content-actions')
    <a href="{{route('outlets.create')}}" class="btn btn-primary">Add Outlet</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Outlet Name</th>
                    <th>Hotline</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($outlets as $outlet)
                    <tr>
                        <td>{{$outlet->id}}</td>
                        <td>{{$outlet->outlet_name}}</td>
                        <td>{{$outlet->hotline}}</td>
                        <td>{{$outlet->email}}</td>
                        <td>{{$outlet->address}}</td>
                        <td>{{$outlet->created_at}}</td>
                        <td>
                            <a href="{{ route('outlets.show', $outlet) }}" class="btn btn-success"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('outlets.edit', $outlet) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete" data-url="{{route('outlets.destroy', $outlet)}}"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $outlets->render() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-delete', function () {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this outlet?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {_method: 'DELETE', _token: '{{csrf_token()}}'}, function (res) {
                            $this.closest('tr').fadeOut(500, function () {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
